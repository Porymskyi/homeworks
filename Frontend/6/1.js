/**
 * Created by Admin on 26.03.2017.
 */

var persons = [];
var person = {
    name: "er",
    surname: "",
    age: "",
    position: "",
    language: "",
    email: "",
    phone: "",

    ask: function() {
        this.name = document.getElementById("username");
        person.surname = document.getElementsByName("surname");
        person.age = document.getElementsByName("age");
        person.position = document.getElementsByName("position");
        person.language = document.getElementsByName("language");
        person.email = document.getElementsByName("email");
        person.phone = document.getElementsByName("phone");
        persons.push(person);

    }
};



