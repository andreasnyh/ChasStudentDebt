
<?php $__env->startSection('content'); ?>
        <div class="content">
            <div class="title m-b-md">
                <h1 class="mt-5">Hittar du inte dig själv? Sök här</h1>
            </div>
            <label>Filtrera</label>

            
            <select class="custom-select custom-select-md mt-4 mr-2" name="studentClass" id="studentClass" type="text" required>
                <option value="students_ALL" >-- Alla Klasser --</option>
                    <?php $__currentLoopData = $eds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($ed->name); ?>"><?php echo e($ed->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php if(count($students) >= 1): ?>
            <table class="table table-striped mt-5" border="1px" >
                <thead class="bg-dark text-light">
                <tr>
                    <th>Namn</th>
                    <th>Email</th>
                    <th>Klass</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="studentsALL">
                    <td><a href="/history/<?php echo e($user->id); ?>"><?php echo e($user->name); ?></a></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->class); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $studentsFWD19; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr  class="FWD19" style="display: none">
                        <td ><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->class); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $studentsFWD20; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr  class="FWD20" style="display: none">
                        <td ><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->class); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $studentsIK19; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr  class="IK19" style="display: none">
                        <td ><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->class); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $studentsIK20; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr  class="IK20" style="display: none">
                        <td ><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->class); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php elseif(!empty($search)): ?>
                <p>No results found for <?php echo e($search); ?></p>
            <?php endif; ?>
            <form method="post" action="<?php echo e(url('students/search')); ?>">
                <?php echo csrf_field(); ?>
                <label for ="student_search">Sök:</label>
                <input name="name" type="text" class="search" id="student_search">
                <button type="submit">Sök student</button>
            </form>

            <form action="/student/add">
                <button class="btn btn-outline-success mr-3" type="submit">Lägg till student</button>
            </form>
            <form action="/">
                <button class="btn btn-lg bg-dark text-light mt-4" type="submit">Tillbaka till Meny</button>
            </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/ChasStudentDebt/resources/views/student.blade.php ENDPATH**/ ?>