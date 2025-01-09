<section class="container">
    <div>
        <p class="pt-5 text-center text-danger"><b>Some Awesome Things About QAHarbor</b></p>
        <h1 class="text-center text-color "><b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, possimus?</b></h1>
    </div>
    <div class="mb-5 row">
        @foreach ($awesomeThings as $awesomeThing)
            <!-- single item -->
            <div class="mt-5 col-md-4">
                <div class="card">
                    <div class="p-5 card-body card-bg">
                        <h5 class="card-title text-danger fw-bold">{{ $awesomeThing->title }}</h5>
                        <p class="card-text">{{ $awesomeThing->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
