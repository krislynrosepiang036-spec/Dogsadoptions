<!-- Sidebar -->
<div class="sidebar">
    <h3><i class="bi bi-paw-fill"></i> DogAdopt</h3>
    <a href="{{ route('user-dashboard') }}"><i class="bi bi-house-door"></i> Dashboard</a>
    <a href="{{ route('my-adoptions') }}"><i class="bi bi-heart"></i> My Adoptions</a>
    <a href="{{ route('dogadoptions') }}"><i class="bi bi-paw"></i> Dog Adoptions</a>
    <a href="{{ route('community') }}"><i class="bi bi-people"></i> Community</a>
    <a href="#"><i class="bi bi-gear"></i> Settings</a>
 <form action="{{ route('logout') }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit" style="background:none; border:none; color:inherit;">
        <i class="bi bi-box-arrow-right"></i> Logout
    </button>
</form>
</div>