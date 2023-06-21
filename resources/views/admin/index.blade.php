<h1>Welcome to Admin Panel</h1>
<p>Jumlah total postingan: {{ $totalTodos }}</p>
<p>Total User: {{ $totalUsers }}</p>

<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Gua ban lo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            
            <td>
                @if ($user->role !== 'admin')
                    <form action="{{ route('admin.make-admin', $user->id) }}" method="POST">
                        @csrf
                        <button type="submit" onclick="return confirm('Are you sure you want to promote this user to admin?')">Make Admin</button>
                    </form>
                @endif
            </td>
            
            <td>
                <form action="{{ route('admin.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                </form>
               
            </td>
           
        </tr>
        @endforeach
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Total Postingan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->email }}</td>
        <td>{{ $user->todos_count }}</td>
            
        </tr>
        @endforeach
       
    </tbody>
</table>

<br>

<div class="mt-4" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     <i class="fa-solid fa-right-from-bracket font-bold text-white text-xl md:text-4xl"></i> logout
        
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>



