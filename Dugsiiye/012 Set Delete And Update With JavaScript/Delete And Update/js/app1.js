loadData()
$("#addNew").click(function () {
  $("#studentModal").modal("show")
})

$("#studentForm").submit(function (event) {
  event.preventDefault()
  // gets the form data
  let form_data = new FormData($("#studentForm")[0])
  // Adds the action to the form value
  form_data.append("action", "registerStudent")
  // Method
  // Data type
  //url

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "php/api.php",
    data: form_data,
    processData: false,
    contentType: false,
    success: function (data) {
      let status = data.status
      let response = data.data
      $("#studentForm")[0].reset()
      alert(response)
      console.log(response)
    },
    error: function (data) {
      console.log(data)
    },
  })
})

function loadData() {
  let sendingData = {
    action: "readAll",
  }

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "php/api.php",
    data: sendingData,
    success: function (data) {
      let status = data.status
      let response = data.data

      let html = ""
      let tr = ""

      if (status) {
        response.forEach((item) => {
          tr += "<tr>"
          for (let i in item) {
            tr += `<td>${item[i]}</td>`
          }
          tr += `<td><a class="btn btn-info update_info" update_id=${item["id"]}>
                       <i class="fas fa-edit"></i>
                     </a> 
          <a class="btn btn-danger delete_info" delete_id=${item["id"]}>
          <i class="fas fa-trash"></i>
          </a>             </td>`
          tr += "</tr>"
        })
        $("#studentTable tbody").append(tr)
      }
    },
    error: function (data) {},
  })
}
