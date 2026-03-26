@include('user-dashboard.userheader')

<body>
    @include('user-dashboard.sidebar')
    <div class="main-content">
        <h1 class="mb-4">Community</h1>
        <p class="mb-5">Connect with other adopters, share stories, and see updates from the DogAdopt community.</p>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-community">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" alt="Charlie">
                    <div class="card-body">
                        <h5 class="card-title">Jane Doe</h5>
                        <p class="card-text">Shared a story about adopting Buddy, a golden retriever.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-community">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" alt="Charlie">
                    <div class="card-body">
                        <h5 class="card-title">John Smith</h5>
                        <p class="card-text">Looking for tips on puppy training from fellow adopters.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-community">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" alt="Charlie">
                    <div class="card-body">
                        <h5 class="card-title">Emily Clark</h5>
                        <p class="card-text">Shared a photo album of her adopted dog Max.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>