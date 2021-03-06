<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="{{ route('home') }}"> <h1> Dashboard</h1></a>
    <div>
        <a class=" btn-primary dropdown-toggle" data-toggle="collapse" data-target="#charter">Citizens Charter</a>
        <div id="charter" class="collapse" >
            <a href="#">**View List</a>
            <a href="{{ route('services.create') }}"><h6>Create Citizens' Charter</h6></a>
            <a href="{{ route('analysis.index') }}"><h6>Create Chem-Micro(RSTL Only)</h6></a>
            <a href="{{ route('chemmicro.sched.index') }}"><h6>Create Chem-Micro Schedule(RSTL Only)</h6></a>
        </div>
    </div>
    <br>
    <br>
    <div>
        <a class=" btn-primary dropdown-toggle" data-toggle="collapse" data-target="#library">Library</a>
        <div id="library" class="collapse" >
            <a href="#">**Users</a>
            <a href="{{ route('divisions.index') }}"><h6>Division</h6></a>
            <a href="{{ route('units.index') }}"><h6>Unit</h6></a>
        </div>
    </div>
    <br>
    <br>
    <div>
        <a class="btn-primary dropdown-toggle" data-toggle="collapse" data-target="#conf">System</a>
        <div id="conf" class="collapse">
            <a href="{{ route('settings.index') }}"><h6>Configuration</h6></a>
        </div>
    </div>
    <br>
    <br>
    <div>
        <a class=" btn-primary dropdown-toggle" data-toggle="collapse" data-target="#profile">Profile</a>
        <div id="profile" class="collapse" >
            <a href="#">**View/Update</a>
            <a href="{{ route('register') }}"><h6>Register User</h6></a>
            <a href="#">**Logout</a>
        </div>
    </div>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ </button>
</div>
