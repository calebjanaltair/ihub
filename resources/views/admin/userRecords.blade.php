@foreach($users as $user)
<tr class="gradeX" style="cursor: pointer;">
    <td>{{$loop->iteration}}</td>
    <td><img style="width: 30px; height: 30px;" src="{{'./public/uploads/profile/' . ($user->profile_img ?? 'avatar.jpg')}}" alt=""> {{' ' .$user->name}}</td>
    <td>{{$user->department ?? 'N/A'}}</td>
    <td>{{$user->role == 0 ? 'Moderator' : 'Administrator'}}</td>
    <td> @if($user->status === 0) <span class="badge bg-dark">Inactive</span> @elseif($user->status === 1) <span class="badge bg-success">Active</span>@elseif($user->status === 2) <span class="badge bg-danger">Blocked</span> @endif</td>
    <td class="">
        <a href="user-details/{{$user->id}}" class="btn btn-sm btn-success"><i class="fa fa-id-card-o"> </i> Perview</a>
        @if($user->status == 2)
        <a class="btn btn-primary btn-sm btn-block" onclick="confirmUnblock('{{$user->id}}')">
            <i class="fa fa-unlock"> </i> Unblock
        </a>
        @elseif($user->status == 0 || $user->status == 1)
        <a class="btn btn-warning btn-sm btn-block" onclick="confirmBlock('{{$user->id}}')">
            <i class="fa fa-lock"> </i> Block
        </a>
        @endif
        <a class="btn btn-danger btn-sm btn-block" onclick="confirmDelete('{{$user->id}}')"><i class="fa fa-trash"> </i> Delete</a>
    </td>
</tr>
@endforeach