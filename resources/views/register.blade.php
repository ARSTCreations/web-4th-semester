<div class="box-p-surat">
    <h1>REGISTER</h1>
    <form action="" method="post">
        <div>
            <label for="">Full Name</label>
            <input type="text" name="full_name" placeholder="Full Name" required>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Email" required>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Password" required>
            <label for="">Working Status</label>
            <select name="working_status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
            <label for="">Salary</label>
            <input type="number" name="salary" required>
            <label for="">Phone Number</label>
            <input type="number" name="phone" required>
            <label for="">Address</label>
            <input type="text" name="address" required>
            <label for="">Birth Place</label>
            <input type="text" name="birth_place" required>
            <label for="">Birth Date</label>
            <input type="date" name="birth_date" required>
            <label for="">Gender</label>
            <select name="gender" id="" required>
                <option value="0">Female</option>
                <option value="1">Male</option>
            </select>
            <label for="">Start Date</label>
            <input type="datetime" name="start_date" required>
            <label for="">End Date</label>
            <input type="datetime" name="start_date" required>
        </div>
        <button type="submit">Register</button>
    </form>
</div>