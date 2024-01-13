$("#addNew").click(function () {
  $("#studentModal").modal("show")
})
$("#studentForm").submit((event) => {
  event.preventDefault()
  //gets the form data
  let form_data = new FormData($("#studentForm")[0])
  // add the action to from value
  form_data.append("action", "registerStudent")
  //url
  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "api.php",
    data: form_data,
    processData: false,
    contentType: false,
    success: function (data) {
      let status = data.status
      let response = data.data
      $("#studentForm")[0].reset()
      alert(response)
    },
    error: function (data) {
      console.log(data)
    },
  })
})
