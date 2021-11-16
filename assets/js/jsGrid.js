
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

  rowClick: function ({ item, itemIndex, event }) {
    let id = "";

    this.data.forEach((element) => {
      if (item.id == element.id) id = item.id;
    });

    window.location = "../src/employee.php?id=" + id;
  },

  controller: {
    loadData: function () {
      var d = $.Deferred();

      $.ajax({
        url: "../resources/employees.json",
        dataType: "json",
        success: function (data) {
          d.resolve(data);
        },
        error: function (xhr, exception) {
          alert("Error: " + xhr + " " + exception);
        },
      });

      return d.promise();
    },

    insertItem: function (item) {

      var d = $.Deferred();

      $.ajax({
        type: "POST",
        url: "../src/library/employeeController.php",
        data: item,
        success: function (data) {
          d.resolve(data);
        },
        error: function (xhr, exception) {
          alert("Error: " + xhr + " " + exception);
        },
      });
      $("#jsGrid").jsGrid("render");
      return d.promise();
    },
    deleteItem: function (item) {
      var d = $.Deferred();
      $.ajax({
        type: "DELETE",
        url: "../src/library/employeeController.php",
        data: { id: item.id },
        success: function (data) {
          console.log(data)
          d.resolve(data);
        },
        error: function (xhr, exception) {
          alert("Error: " + xhr + " " + exception);
        },
      });
      return d.promise();
    },
    updateItem: function (item) {
      var d = $.Deferred();
      $.ajax({
        type: "PUT",
        url: "../src/library/employeeController.php",
        data: item,
        success: function (data) {
          console.log(data);
          d.resolve(data);
        },
        error: function (xhr, exception) {
          alert("Error: " + xhr + " " + exception);
        },
      });
      return d.promise();
    },
  },



  fields: [{
    name: "id",
    type: "hidden",
    css: "hide"
  },
  {
    title: "Name",
    name: "name",
    type: "text",
    width: 150,
    validate: "required"
  },

  {
    title: "Email",
    name: "email",
    type: "text",
    width: 150,
    validate: "required"
  },

  {
    title: "Age",
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
    title: "Street No.",
    name: "streetAddress",
    type: "text",
    width: 150,
    validate: "required"
  },
  {
    title: "City",
    name: "city",
    type: "text",
    width: 150,
    validate: "required"
  },
  {
    title: "State",
    name: "state",
    type: "text",
    width: 150,
    validate: "required"
  },
  {
    title: "State",
    name: "postalCode",
    type: "text",
    width: 150,
    validate: "required"
  },
  {
    title: "Phone No.",

    name: "phoneNumber",
    type: "text",
    width: 150,
    validate: "required"
  },
  // {
  //   name: "gender",
  //   type: "select",
  //   items: [{
  //     Name: "",
  //     Id: ""
  //   },
  //   {
  //     Name: "Male",
  //     Id: "man"
  //   },
  //   {
  //     Name: "Female",
  //     Id: "woman"
  //   }
  //   ],
  //   valueField: "Id",
  //   textField: "Name",
  //   validate: "required"
  // },
  {
    type: "control"
  }

  ]
})