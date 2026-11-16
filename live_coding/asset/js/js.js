let form = document.getElementById("categoryForm");
let button = document.getElementById("botton");
let spinner = document.getElementById("spinner");
let message = document.getElementById("message");
let result = document.getElementById("categoryList");

function show_message(message_11,status)
{
   message.textContent = message_11 ;
   message.className = status ? "bg-red-100 p-4" : "bg-green-100 p-4" ;

   setTimeout(()=>{
      message.textContent = "" ;
      message.className = "" ;
   },2000)
}

function show()
{
 fetch("backend/api/api.php",{method:'GET'})
 .then(res=>{
    if(res.ok === false)
    {
      throw new Error("there is a error in response ");
    }
    return res.json() ;
 })
 .then(data=>{
    result.replaceChildren();
    console.log("here is the data  ",data);
    data.forEach(element => {
        let row = document.createElement('tr');
        let ceil = document.createElement('td');
        ceil.textContent = element.name ;
        ceil.className = "p-4" ;
        row.appendChild(ceil);
        result.appendChild(row);
    });
 })
 .catch(error=>show_message(error.message,true))
}
show() ;