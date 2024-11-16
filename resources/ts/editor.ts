

const getFile = async (url: string) => {
  const file = await fetch(url);
  const data = await file.text();
  console.log(data);
  return data;
};

const value =  getFile("http://localhost/code/main.cpp");
