$("#jsGrid").jsGrid({
  width: "100%",
  height: "400px",

  filtering: true,
  inserting: true,
  editing: true,
  sorting: true,
  paging: true,
  autoload: true,
  pageSize: 10,
  pageButtonCount: 5,
  deleteConfirm: "Do you really want to delete data?",

  controller: {
    loadData: function (response) {
      return $.ajax({
        type: "GET",
        url: "../resources/employees.json",
        data: response,
        dataType: "json"
      })
    }
  },

  fields: [{
    name: "id",
    type: "hidden",
    css: "hide"
  },
  {
    name: "name",
    type: "text",
    width: 150,
    validate: "required"
  },
  {
    name: "lastName",
    type: "text",
    width: 150,
    validate: "required"
  },

  {
    name: "age",
    type: "text",
    width: 50,
    validate: function (value) {
      if (value > 0) {
        return true;
      }
    }
  },
  {
    name: "gender",
    type: "select",
    items: [{
      Name: "",
      Id: ""
    },
    {
      Name: "Male",
      Id: "male"
    },
    {
      Name: "Female",
      Id: "female"
    }
    ],
    valueField: "Id",
    textField: "Name",
    validate: "required"
  },
  {
    type: "control"
  }

  ]
})