$(document).ready(() => {
    // Place your code here to execute when the document is ready
    // Move focus to the first text box
    $("#code").focus();
    $("#price").focus();
    $("#name").focus();
    $("#size").focus();
    $("#description").focus();

    // Handler for submit event
    $("#product_form").submit((event) => {
        let isValid = true;

        // Validate code
        const code = $("#code").val();
        if (code === "") {
            $("#code").next().text("This field should not be blank ");
            isValid = false;
        } 
        else if (code.length < 4 || code.length > 10) {
            $("#code").next().text("Must be at least 4 characters, and a maximum of 10 characters");
            isValid = false;
        }
        else {
            $("#code").next().text(""); // Clear error message
        }

        // Validate name 
        const name = $("#name").val();
        if(name===""){
            $("#name").next().text("This field should not be in blank");
            isValid = false;
        }
        else if (name.length < 10 || name.length > 100 ) {
            $("#name").next().text("Must be at least 10 characters, and a maximum of 100 characters");
            isValid = false;
        } else {
            $("#name").next().text(""); // Clear error message
        }

        // Validate description
        const description = $("#description").val();
        if(description===""){
            $("#description").next().text("This field should not be in blank");
            isValid = false;
        }
        else if (description.length < 10 || description.length > 255) {
            $("#description").next().text("Must be at least 10 characters, and a maximum of 255 characters");
            isValid = false;
        } else {
            $("#description").next().text(""); // Clear error message
        }

        // Validate price
        const price = $("#price").val();
        if (price === "") {
            $("#price").next().text("This field should not be blank");
            isValid = false;
        }
        else if (parseFloat(price) < 0) {
            $("#price").next().text("Cannot be a negative number, insert a valid amount");
            isValid = false;
        } 
        else if (parseFloat(price) === 0) {
            $("#price").next().text("Please Insert a valid amount");
            isValid = false;
        } 
        else if (parseFloat(price) > 100) {
            $("#price").next().text("Price cannot exceed $100");
            isValid = false;
        } 
        else {
            $("#price").next().text(""); // Clear error message
        }

        // Validate size
        const size = $("#size").val();
        if(size===""){
            $("#size").next().text("This field should not be in blank");
            isValid = false;
        }
        else if (size.length < 4|| size.length > 20) {
            $("#size").next().text("Must be at least 4 characters, and a maximum of 20 characters");
            isValid = false;
        } else {
            $("#size").next().text(""); // Clear error message
        }






        // Prevent submission of form if any of the entries are invalid
        if (!isValid) {
            event.preventDefault();
        }
    });
});
