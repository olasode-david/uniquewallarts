<style>
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 20px;
  
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* The footer - hidden by default */
.footer {
  position: fixed;
  bottom: 0;
  right: 15px;
  z-index: 9;
  max-width:335px;
  width:100%;
}

.card:hover
{
  box-shadow:0 0 10px rgba(0,0,0,.2)
}
/* The popup chart - hidden by default */
.chart-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}
/* Add styles to the chart container */
.chart-container {
  max-width: 400px;
  padding: 10px;
  width:100%;
  height:100vh;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 100px;
}
/* Full-width input */
.form-container input {
  width: 100%;
  padding:5px;
  margin: 5px 0 10px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 30px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* When the textarea gets focus, do something */
.form-container input:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
     /* Make the image fully responsive */
     @media (max-width:568px)
     {
       #icons{
         display:none;
       }
       #icon{
         display:none;
       }
       
     }

     @media (min-width:768px)
     {
        #press{
          display:none;
        }
       
     }
     
     @media (min-width:968px)
     {
        #press{
          display:none;
        }

     }
     .move-right
     {
       margin-right:100px;
     }
     .move-left
     {
       margin-left:100px;
     }

     @media (max-width:568px)
     {
       .move-right
        {
          margin-right:10px;
        }
       .move-left
        {
          margin-left:10px;
        }
        .img-small
        {
          width:100%;
        }
       
     }
    
    .cart___real
    {
      position:absolute;
      right:26px;
      top:10px; 
      width:20px; 
      color:red;
    }

    @media (max-width:568px){
      .cart___real
      {
        position:absolute;
        right:26px;
        top:10px;  
        width:20px; 
      }
    }

    @media (max-width:800px){
      .cart___real
      {
        position:absolute;
        right:26px;
        top:10px;  
        width:20px; 
      }
    }

   
    
  
    </style>