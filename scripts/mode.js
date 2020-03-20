var checkbox = document.querySelector("input[name=checkbox]");
checkbox.addEventListener("change", function () {
  if (this.checked) {
    console.log("checked");
  } else {
    console.log("not checked");
  }
});
//not finished!!