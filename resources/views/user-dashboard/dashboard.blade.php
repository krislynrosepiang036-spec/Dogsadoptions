@include('user-dashboard.userheader')
<body>

@include('user-dashboard.sidebar')

<div class="main-content">
    
    <div class="navbar-custom">
        <h5>Welcome, {{ auth()->user()->name }}!</h5>
        <div>
            <h6><i class="bi bi-person-circle mx-3"></i>{{ auth()->user()->name }}</h6>
        </div>
    </div>

    <!-- Dashboard Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card-dashboard text-center">
                <h4>12</h4>
                <p>Dogs Adopted</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-dashboard text-center">
                <h4>3</h4>
                <p>Pending Applications</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-dashboard text-center">
                <h4>5</h4>
                <p>Saved Dogs</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-dashboard text-center">
                <h4>24</h4>
                <p>Messages</p>
            </div>
        </div>
    </div>

    <!-- Recent Adoptions Table -->
    <div class="card-dashboard p-4">
        <h4 class="mb-3">Recent Adoptions</h4>
        <table class="table table-custom">
            <thead>
                <tr>
                    <th>Dog Name</th>
                    <th>Breed</th>
                    <th>Status</th>
                    <th>Date Adopted</th>
                </tr>
            </thead>
           
            </tbody>
        </table>
    </div>
</div>

</body>
</html>