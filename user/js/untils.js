let getDataFromDoc = (doc) => {
  let data = doc.data();
  data.id = doc.id;
  return data;
};

let getDataFromDocs = (docs) => {
  let result = [];
  for (let doc of docs) {
    let data = getDataFromDoc(doc);
    result.push(data);
  }
  return result;
};
