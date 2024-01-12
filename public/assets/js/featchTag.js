const editCategory=document.querySelectorAll(".EditT");
const modal=document.querySelector("#my_modal_3")

const ETag=document.querySelector("#ETag");
const editTag=document.querySelector("#formEditTag");

editCategory.forEach(el=>
    el.addEventListener("click",function(e){
    e.preventDefault();
    let idTag=e.target.value
   console.log(idTag);

   fetch(`/tag/${idTag}`,{method: "GET" , headers: {
        "Content-Type": "application/json",
       
      },

    }).then(response => {
        if (response.ok) {
          return response.json();
        }
        throw new Error('Network response was not ok.');
      })
      .then(data => {
    let {tagId,tagName}=data
       
      console.log(tagName);
        ETag.value = tagName
        modal.showModal()
        editTag.setAttribute("action", `/tag/update/${tagId}`);
        
      })

  
}))


// formE_C.addEventListener('submit',function(e){
//   e.preventDefault();
  
//   const idCategory =btnEdit.value
//   fetch(`/category/${idCategory}`,{method: "POST" , headers: {

//     "Content-Type": "application/json",
   
//   },

// }).then(response => {
//     if (response.ok) {
//     console.log(response.json());  
//     }
//     throw new Error('Network response was not ok.');
//   })
//   .then(data => {
//     console.log(data);
//   })

// })