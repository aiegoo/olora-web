function homeAdd(data){
  var sel = ["", ""];
  if(data.val().target == "_blank") sel[0] = "selected";
  else sel[1] = "selected";
  
  var html = `
 <li id="${data.key}">
     <input type="text" class="w3-input w3-border w3--show-inline-block home_title" value="${data.val().title}">
     <input type="text">
     <select name="" id="">
       <option value=""></option>
       <option value=""></option>
       <button></button><button></button>
     </select>
   </li>
`
}