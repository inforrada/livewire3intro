<div>
    <div>Filtrar usuarios: <input type="text" wire:model.live="text"></div>
    <br>
        
    <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $key => $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
          <tr>
          @endforeach
        </tbody>
      </table>
    
</div>
