loadData()
let btnAction = "Insert"
$("#addNew").click(function () {
  $("#studentModal").modal("show")
})

$("#studentForm").submit(function (event) {
  event.preventDefault()
  // gets the form data
  let form_data = new FormData($("#studentForm")[0])
  // Adds the action to the form value
  if (btnAction == "Insert") {
    form_data.append("action", "registerStudent")
  } else {
    form_data.append("action", "updateStudent")
  }

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
      // console.log(response)
      btnAction = "Insert"
      $("#studentModal").modal("hide")
      loadData()
    },
    error: function (data) {
      console.log(data)
    },
  })
})

function loadData() {
  $("#studentTable tbody").html("")
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

function fetchInfo(id) {
  let sendingData = {
    action: "readStudentInfo", // Change the action to "readStudentInfo"
    id: id,
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
        console.log(response[0]) // Log the entire response for debugging
        $("#id").val(response[0].id)
        $("#name").val(response[0].Name)
        $("#class").val(response[0].class)
        $("#studentModal").modal("show")
        btnAction = "Update"
      }
    },
    error: function (data) {
      console.log(data)
    },
  })
}

$("#studentTable").on("click", "a.update_info", function () {
  let id = $(this).attr("update_id")
  fetchInfo(id)
})
