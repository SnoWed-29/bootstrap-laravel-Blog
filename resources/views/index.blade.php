@extends('layouts.app')
@section('content')
<div class="px-4 py-5 my-5 text-center border-bottom">
    <h1 class="display-5 fw-bold">Welcome to my Blog</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repellendus quae veniam tenetur reprehenderit nemo inventore officiis non alias a?</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="/blog" class="btn btn-primary btn-lg px-4 gap-3 ">Start reading</a>
      </div>
    </div>
  </div>
{{-- body --}}
{{-- posts --}}
<div class="container d-flex d-flex justify-content-around" style="height:70vh">
    
    <div class="card" style="width: 18rem;height:13rem">
        <img class="card-img-top" style="height: 18rem" src="https://picsum.photos/id/237/200/300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Title here</h5>
          <h6 class="card-subtitle mb-2 text-muted">Made By : Haitham <span>29/07/2001</span></h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;height:13rem">
        <img class="card-img-top" style="height: 18rem" src="https://picsum.photos/id/237/200/300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Title here</h5>
          <h6 class="card-subtitle mb-2 text-muted">Made By : Haitham <span>29/07/2001</span></h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;height:13rem">
        <img class="card-img-top" style="height: 18rem" src="https://picsum.photos/id/237/200/300" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Title here</h5>
          <h6 class="card-subtitle mb-2 text-muted">Made By : Haitham <span>29/07/2001</span></h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</div>
<div class="border" style="background: #3a3b3c;padding:2.6rem;">
    <div class="container">
        <div class="d-flex justify-content-around flex-row">
            <h4 class="text-white">Category 1</h4>
            <h4 class="text-white">Category 2</h4>
            <h4 class="text-white">Category 3</h4>
            <h4 class="text-white">Category 4</h4>
        </div>
    </div>
</div>
{{-- recent posts --}}
<div class="container d-flex justify-content-center">
    <div class="row ">
    <center>    
        <h2>Recent Posts</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nobis eos beatae, dignissimos dolorum expedita quo ipsum enim tempora aut!
        </p>
    </center>
    <div class="container mt-4">
        <div class="card" style="height: 300px">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="https://picsum.photos/id/1/200/300" style="height: 300px;object-fit: cover;" class="card-img" alt="Image">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card Title</h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae est accusamus nam, adipisci maxime dolor eligendi inventore minima odit sequi, temporibus quae dolorum libero. Quae aperiam mollitia, dolore quaerat voluptatibus cumque nobis quia veritatis aliquam itaque ipsa reprehenderit, blanditiis expedita..</p>
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</div>
@endsection