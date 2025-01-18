@extends('tamplate.admin')

@section('content')
    <section class="dashboard">
      <div class="container">
        <h1>Data User</h1>

        <div class="p-2">
            <button class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">ADD PEKERJA</button>

             <!-- Modal Structure -->
             <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addUserModalLabel">Add New Pekerja</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div  class="modal-body">
                            <!-- Modal Form -->
                            <form id="addUserForm" >
                                @csrf
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                  </div>
                                  <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="district" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" id="district" name="district" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="regency_city" class="form-label">Kota / Kabupaten</label>
                                    <input type="text" class="form-control" id="regency_city" name="regency_city" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="province" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" id="province" name="province" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="phone_number" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="number_whatsapp" class="form-label">Nomer Whatsapp</label>
                                    <input type="text" class="form-control" id="number_whatsapp" name="number_whatsapp" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="level_user" class="form-label">Pekerja / Majikan</label>
                                    <select id="level_user" name="level_user" required>
                                      <option value="" disabled selected>Pilih Role</option>
                                      <option value="3">Pekerja</option>
                                      <option value="2">Majikan</option>
                                    </select>
                                  </div>
                                  <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                  </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-2">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Kabupaten/Kota</th>
                            <th>Province</th>
                            <th>No Telepon</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->district }}</td>
                            <td>{{ $item->regency_city }}</td>
                            <td>{{ $item->province }}</td>
                            <td>{{ $item->phone_number }}</td>
                            <td>
                                <button class="btn btn-sm btn-info" onclick="viewDetail({{ $item->id }})">Detail</button>
                                <button class="btn btn-sm btn-danger" onclick="deleteUser({{ $item->id }})">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('./js/jquery-3.3.1.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            // Handle form submission
            $('#addUserForm').on('submit', function (e) {
                e.preventDefault(); // Prevent the form from submitting normally
    
                let formData = new FormData(this); // Capture the form data
                let token = localStorage.getItem('auth_token');
    
                // Send AJAX request
                $.ajax({
                    url: '/api/registrasi', // API endpoint
                    method: 'POST',        // HTTP method
                    data: formData,        // Form data
                    processData: false,    // Prevent jQuery from automatically processing data
                    contentType: false,    // Prevent jQuery from setting content type
                    headers: {
                        'Authorization': `Bearer ${token}`, // Include the Bearer Token here
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF Token
                    },
                    success: function (response) {
                        if (response.status) {
                            alert(response.message); // Success message
                            location.reload();       // Reload the page
                        } else {
                            alert('Error: ' + response.message); // Error message from server
                        }
                    },
                    error: function (xhr, status, error) {
                        if (xhr.status === 401) {
                            alert('Session expired. Please log in again.');
                            window.location.href = '/login'; // Redirect to login page
                        }
                        console.error(xhr.responseText); // Log error for debugging
                        alert('An error occurred. Please try again.');
                    },
                });
            });
            function viewDetail(userId) {
                    window.location.href = `/user/detail/${userId}`;
                }
            });

            function deleteUser(userId) {
                if (confirm('Are you sure you want to delete this user?')) {
                    let token = localStorage.getItem('auth_token'); // Retrieve the stored token

                    $.ajax({
                        url: `/api/user/delete/${userId}`,
                        type: 'DELETE',
                        headers: {
                            'Authorization': `Bearer ${token}`, // Include token
                        },
                        success: function (response) {
                            if (response.status) {
                                alert(response.message);
                                location.reload(); // Reload the page to update the table
                            } else {
                                alert('Error: ' + response.message);
                            }
                        },
                        error: function (xhr) {
                            console.error(xhr.responseText);
                            alert('An error occurred. Please try again.');
                        }
                    });
                }
            }
    </script>
    
@endsection


