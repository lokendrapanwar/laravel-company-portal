<form method="post" action="{{url('/employees')}}">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                <input class="form-control" name="first_name" type="text" value="{{ $employee->first_name ?? ''}}" placeholder="Enter first name">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-form-label">Last Name</label>
                <input class="form-control" name="last_name" type="text" value="{{ $employee->last_name ?? ''}}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-form-label">Username <span class="text-danger">*</span></label>
                <input class="form-control" name="username" type="text" value="{{ $employee->username ?? ''}}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                <input class="form-control" name="email" type="email" value="{{ $employee->email ?? ''}}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-form-label">Password</label>
                <input class="form-control" name="password" type="password">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-form-label">Confirm Password</label>
                <input class="form-control" name="confirm_password" type="password">
            </div>
        </div>
        <div class="col-sm-6">  
            <div class="form-group">
                <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                <input type="text" name="employee_id" class="form-control" value="{{ $employee->employee_id ?? ''}}">
            </div>
        </div>
        <div class="col-sm-6">  
            <div class="form-group">
                <label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
                <div class="cal-icon"><input class="form-control datetimepicker" name="joining_date" type="text" value="{{ $employee->joining_date ?? ''}}"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-form-label">Phone </label>
                <input class="form-control" name="phone" type="text" value="{{ $employee->phone ?? ''}}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-form-label">Company</label>
                <select class="select" name="company">
                    <option value="">Global Technologies</option>
                    <option value="1">Delta Infotech</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Department <span class="text-danger">*</span></label>
                <select class="select" name="department">
                    <option>Select Department</option>
                    @foreach($departments as $department)
                        <option value="{{$department->id}}">{{$department->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Designation <span class="text-danger">*</span></label>
                <select class="select" name="designation">
                    <option>Select Designation</option>
                    @foreach($designations as $designation)
                        <option value="{{$designation->id}}">{{$designation->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="table-responsive m-t-15">
        <table class="table table-striped custom-table">
            <thead>
                <tr>
                    <th>Module Permission</th>
                    <th class="text-center">Read</th>
                    <th class="text-center">Write</th>
                    <th class="text-center">Create</th>
                    <th class="text-center">Delete</th>
                    <th class="text-center">Import</th>
                    <th class="text-center">Export</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Holidays</td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                </tr>
                <tr>
                    <td>Leaves</td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                </tr>
                <tr>
                    <td>Clients</td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                </tr>
                <tr>
                    <td>Projects</td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                </tr>
                <tr>
                    <td>Tasks</td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                </tr>
                <tr>
                    <td>Chats</td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                </tr>
                <tr>
                    <td>Assets</td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                </tr>
                <tr>
                    <td>Timing Sheets</td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input checked="" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                    <td class="text-center">
                        <input type="checkbox">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="submit-section">
        <button class="btn btn-primary submit-btn">Submit</button>
    </div>
</form>