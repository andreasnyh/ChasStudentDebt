

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="title m-b-md">
        <h1 class="mt-5">Köp något att dricka vettja!</h1>
    </div>

    <form id="orderForm" action="/order/new" method="GET">
        <select class="custom-select custom-select-sm mt-3 mr-2" name="studentClass" id="studentClass" type="text"
            required>
            <option value="" disabled selected hidden>-- Välj Klass --</option>

            <?php $__currentLoopData = $eds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($ed->name); ?>"><?php echo e($ed->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
        <select class="custom-select custom-select-sm mt-3" name="student_ID" id="student_ID" type="text" required
            disabled>

            <option value="" disabled selected hidden>-- Välj Student --</option>

            
            
            <?php $__currentLoopData = $studentsFWD19; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option class="FWD19" style="display: none" value="<?php echo e($student->id); ?>"><?php echo e($student->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $studentsFWD20; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option class="FWD20" style="display: none" value="<?php echo e($student->id); ?>"><?php echo e($student->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $studentsIK19; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option class="IK19" style="display: none" value="<?php echo e($student->id); ?>"><?php echo e($student->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $studentsIK20; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option class="IK20" style="display: none" value="<?php echo e($student->id); ?>"><?php echo e($student->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <table class="table table-striped mt-4" border="1px">
            <thead class="bg-dark text-light">
                <th colspan="100%">Välj dryck</th>
                <tr>
                    <th>Dryck</th>
                    <th>Pris</th>
                    <th>Antal</th>
                </tr>
            </thead>
            <tr>
                <td>Öl</td>
                <td>10kr</td>
                <td>
                    <button class="btn btn-sm btn-outline-danger" type="button" id="subtBeer">-</button>
                    <input class="p-1" type="number" name="beer_quantity" id="beer_quantity" placeholder="0" value="0"
                        min="0" max="10">
                    <button class="btn btn-sm btn-outline-success" type="button" id="addBeer">+</button>
                </td>
            </tr>
            <tr>
                <td>Vin</td>
                <td>10kr</td>
                <td>
                    <button class="btn btn-sm btn-outline-danger" type="button" id="subtWine">-</button>
                    <input type="number" name="wine_quantity" id="wine_quantity" placeholder="0" value="0" min="0"
                        max="10">
                    <button class="btn btn-sm btn-outline-success" type="button" id="addWine">+</button>
                </td>
            </tr>
            <tr>
                <td>Läsk</td>
                <td>5kr</td>
                <td>
                    <button class="btn btn-sm btn-outline-danger" type="button" id="subtSoda">-</button>
                    <input type="number" name="softdrink_quantity" id="softdrink_quantity" placeholder="0" value="0"
                        min="0" max="10">
                    <button class="btn btn-sm btn-outline-success" type="button" id="addSoda">+</button>
                </td>
            </tr>
            <tr>
                <td>Moonshine</td>
                <td>6kr</td>
                <td>
                    <button class="btn btn-sm btn-outline-danger" type="button" id="subtMoon">-</button>
                    <input type="number" name="moonshine_quantity" id="moonshine_quantity" placeholder="0" value="0"
                        min="0" max="10">
                    <button class="btn btn-sm btn-outline-success" type="button" id="addMoon">+</button>
                </td>
            </tr>
        </table>
        <button class="btn btn-outline-success mr-3" type="submit">Köp dryck</button>
        <button class="btn btn-outline-danger" type="reset">Ångra</button>
    </form>
    <form action="/">
        <button class="btn btn-lg bg-dark text-light mt-2" type="submit">Tillbaka till Meny</button>
    </form>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/ChasStudentDebt/resources/views/order.blade.php ENDPATH**/ ?>