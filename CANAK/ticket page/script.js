function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  document.getElementById("defaultOpen").click(); // Open the default tab on page load
  
  document.getElementById("newTicketForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    
    // You can add JavaScript code here to handle form submission, like sending data to the server
    console.log("Form submitted!");
  });
  