<form action="{{url('leaves')}}" method="POST">
    @csrf
    <div class="form-group">
        <label>Leave Type <span class="text-danger">*</span></label>
        <select class="select" name="leave_type">
            <option>Select Leave Type</option>
            <option>Casual Leave 12 Days</option>
            <option>Medical Leave</option>
            <option>Loss of Pay</option>
        </select>
    </div>
    <div class="form-group">
        <label>From <span class="text-danger">*</span></label>
        <div class="cal-icon">
            <input class="form-control datetimepicker" name="from_date" type="text">
        </div>
    </div>
    <div class="form-group">
        <label>To <span class="text-danger">*</span></label>
        <div class="cal-icon">
            <input class="form-control datetimepicker" name="to_date" type="text">
        </div>
    </div>
    <div class="form-group">
        <label>Number of days <span class="text-danger">*</span></label>
        <input class="form-control" name="number_of_days" type="text">
    </div>
    <div class="form-group">
        <label>Remaining Leaves <span class="text-danger">*</span></label>
        <input class="form-control" name="remaining_leaves" value="12" type="text">
    </div>
    <div class="form-group">
        <label>Leave Reason <span class="text-danger">*</span></label>
        <textarea rows="4" name="leave_reason" class="form-control"></textarea>
    </div>
    <div class="submit-section">
        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
    </div>
</form>