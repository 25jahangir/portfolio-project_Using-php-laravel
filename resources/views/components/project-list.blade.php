 <!-- Projects Section-->
 <section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div id="project-list" class="col-lg-11 col-xl-9 col-xxl-8">



            </div>
        </div>
    </div>
</section>

<script>
   GetProjectList();
   async function GetProjectList(){

        let URL="/projectsData"

        try{
        
             // Loader Show Content Hide
             document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');

        let res = await axios.get(URL);

        
        document.getElementById('loading-div').classList.add('d-none');
        document.getElementById('content-div').classList.remove('d-none');
        
        res.data.forEach((item)=>{

            document.getElementById("project-list").innerHTML += 

                `<div class="card overflow-hidden shadow rounded-4 border-0 mb-5">

                                <div class="card-body p-0 m-2">
                                    <div class="d-flex align-items-center">  
                                        <div class="p-5">
                                            <h2 class="fw-bolder">${item['title']}</h2>
                                            <p>${item['details']}</p>
                                        </div>
                                        <a href="${item['previewLink']}" class="text-decoration-none" target="_blank">
                                        <img class="img-fluid" src="${item['thumbnailLink']}" alt="..." style="width: 50%;">
                                         </a>
                                    </div>
                                </div>
                </div>` 
            


        })
        }
        catch(error){
            alert(error)
        }
       
    }
</script>

