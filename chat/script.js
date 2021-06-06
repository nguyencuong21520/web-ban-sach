let currentConversations 
let loadConversations = async function () {
   let currentEmail = "xuanquy1120@gmail.com"
    let result = await firebase.firestore()
        .collection('conversations')
        .where('users', 'array-contains', currentEmail)
        .get()
    let conversations = getDataFromDocs(result.docs)
    currentConversations = conversations[0]
    console.log(conversations);
    showListConversation(conversations)
    // if (conversations.length) {
    //     let currentConversation = conversations[0]
    //     model.saveCurrentConversations(currentConversation)
    // }


}
loadConversations()

let formAddMessage = document.querySelector('.form-add-message-chat')
formAddMessage.onsubmit = function (event) {
    event.preventDefault()

    let messageContent = formAddMessage.message.value.trim()
    if (messageContent) {
        updateNewMessage(messageContent)
    }
}


let showListConversation =(listConversations)=> {
    if (listConversations) {
        let listContainer = document.querySelector('.list-conversation')

        listContainer.innerHTML = ''
        for (let conversation of listConversations) {
            let conversationId = conversation.id
            let title = conversation.users[1]
            let memberCount = conversation.users.length

            let members = (memberCount > 1) ? `${memberCount} members` : `${memberCount} member`
            let className = (currentConversations.id == conversationId) ?
                'list-conversation-wrapper current' :
                'list-conversation-wrapper'

            let html = `<div class="${className}">
            <div id="conversation-${conversationId}" >
                <div class="conversation-title">${title}</div>
                <div class="conversation-members">${members}</div>
                </div> 
                </div>`

            listContainer.innerHTML += html
        }
        // bind event to conversation tags
        for (let conversation of listConversations) {
            let conversationId = conversation.id
            let conversationDiv = document.querySelector(`#conversation-${conversationId}`)

            conversationDiv.onclick = function () {
                currentConversations = conversation
                showCurrentConversations(conversation)
                showListConversation(listConversations)
            }
        }

    }
}
let showCurrentConversations =(currentConversations) => {
        let listContainer = document.querySelector('.list-message-chat')
        let detailContainer = document.querySelector('.details-current-conversation')

    listContainer.innerHTML = ''
    detailContainer.innerHTML = ''
    if (currentConversations) {
        let messages = currentConversations.messages
        let currentEmail = "xuanquy1120@gmail.com"
        let users = currentConversations.users
        if (messages) {
            for (let message of messages) {
                let owner = message.owner
                let className = (owner == currentEmail) ? `message-chat your` : `message-chat`
                let messageHtml = `
           <div class="${className}">
           <span>${message.content}</span>
           </div>`

                listContainer.innerHTML += messageHtml
            }
        }

        for (let email of users) {
            let emailHtml = `
            <div class="conversation-email">${email}</div>`

            detailContainer.innerHTML += emailHtml
        }
    }
}
let updateNewMessage = async function (messageContent) {
    if (currentConversations) {
        let conversationId = currentConversations.id
        let currentEmail = "xuanquy1120@gmail.com"
        let message = {
            content: messageContent,
            owner: currentEmail,
        }
        let inputFormAddMessage = document.querySelector('.form-add-message-chat input[name="message"]')
        await firebase.firestore()
            .collection('conversations')
            .doc(conversationId)
            .update({
                messages: firebase.firestore.FieldValue.arrayUnion(message)
            })
        inputFormAddMessage.value = ''
    }
}
let setUpConversationchange = async function () {
    let skipRun = true
    let currentEmail = "xuanquy1120@gmail.com"
    firebase.firestore()
    .collection('conversations')
    .where('users', 'array-contains', currentEmail)
    .onSnapshot(function (snapshot) {
        if (skipRun) {
            skipRun = false
            return
        }

        let docChanges = snapshot.docChanges()
        for (let docChange of docChanges) {
            let type = docChange.type
            let conversationDoc = docChange.doc
            let conversation = getDataFromDoc(conversationDoc)

            if (type == 'modified') {
                currentConversations = conversation
                if (currentConversations.id == conversation.id) {
                    showCurrentConversations(currentConversations)
                }
            }
        }
    })
}
setUpConversationchange()






let getDataFromDoc = (doc)=>{
    let data = doc.data()
    data.id = doc.id
    return data

}

let getDataFromDocs = (docs)=>{
   let result =[]
   for(let doc of docs){
       let data = getDataFromDoc(doc)
       result.push(data)
    }
   return result
}