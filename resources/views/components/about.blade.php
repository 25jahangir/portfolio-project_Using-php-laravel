        <!-- About Section-->
        <section class="bg-light py-5">
            <div class="container px-5">
                <div id="about-data" class="row gx-5 justify-content-center">
                
                </div>
            </div>
        </section>


<script>
      aboutData();
      async function aboutData(){
       

        try{
            let URL="/aboutData";
            let response = await axios.get(URL);
                 // Fetch Social Media Data
        let socialURL = "/socialData";
        let socialResponse = await axios.get(socialURL);

        debugger;
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

        let socialData = socialResponse.data;
           
            document.getElementById('about-data').innerHTML += (`
                
                <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                            <p class="lead fw-light mb-4">${response.data.title}</p>
                            <p class="text-muted">${response.data.details}</p>
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a class="text-gradient" href="${socialData['twitterLink']}" target="_blank"><i class="bi bi-twitter" ></i></a>
                                <a class="text-gradient" href="${socialData['linkedinLink']}" target="_blank"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradient" href="${socialData['githubLink']}" target="_blank"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>

                `)
           
        }
        catch(error){
            alert(error)
        }
    }
</script>