

<?php $__env->startSection('content'); ?>

<h2>Lägg till student</h2>


    <form action="/submit" method="ADD">
                    <select type="text" name="class" required>

                        <option selected hidden disabled>--Välj Klass--</option>

                    <?php $__currentLoopData = $eds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option name="<?php echo e($ed->name); ?>" value="<?php echo e($ed->name); ?>"><?php echo e($ed->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                    <table>
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="text" name="email" placeholder="Email" required>
                    </table>
               
                    <button type="submit">Lägg till student</button>
                </form>
                <form action="/">
                    <button type="submit">Tillbaka till meny</button>
                </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/ChasStudentDebt/resources/views/studentAdd.blade.php ENDPATH**/ ?>