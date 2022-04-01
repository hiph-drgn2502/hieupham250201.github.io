function getData() {
  fetch("https://reqres.in/api/users")
    .then(res => {
      return res.json();
    })
    .then(json => {
      console.log(json.data);
      const html = json.data
        .map(function(item) {
          return "<p>" + item.first_name + " " + item.last_name + "</p>";
        })
        .join("");
      console.log(html);
      document.querySelector("#app").insertAdjacentHTML(
        "afterbegin", html);
    })
    .catch(error => {
      console.log(error);
    });
}

getData();
