const editCategory=document.querySelectorAll(".EditC");



const modal=document.querySelector("#my_modal_3")
const Category=document.querySelector("#CategoryE")

const desciption=document.querySelector("#DbCategoryE")
const formE_C=document.querySelector("#formE_C")
const btnEdit=document.querySelector("#btnEdit")

editCategory.forEach(el=>
    el.addEventListener("click",function(e){
    e.preventDefault();
    let idCategory=e.target.value
   

   fetch(`/category/${idCategory}`,{method: "GET" , headers: {
        "Content-Type": "application/json",
       
      },

    }).then(response => {
        if (response.ok) {
          return response.json();
        }
        throw new Error('Network response was not ok.');
      })
      .then(data => {
        const {categoryId,categoryName,categoryDesc}= data
       
    
        
        modal.showModal()
        
        Category.value=categoryName
        desciption.value=categoryDesc
        btnEdit.value=categoryId 

        formE_C.setAttribute("action",`/category/update/${categoryId}`)
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