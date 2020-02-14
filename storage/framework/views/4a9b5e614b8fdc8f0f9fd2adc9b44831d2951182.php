
    <?php $__env->startSection('content'); ?>
    <div class="content">

    

    <table border="1px" class="table table-striped mt-5">
        <thead class="bg-dark text-light">

            <tr>
                <th>Namn</th>
                <th>Antal</th>
                <th>Pris</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $drinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($drink->name); ?></td>
                    <td><?php echo e($drink->stock); ?></td>
                    <td><?php echo e($drink->cost); ?></td>
                </tr> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php /*
    <form method="get" action="/drinksAdd">
        <input type="submit" value="Lägg Till"> 
    </form>
    <form method="get" action="/drinksEdit">
    <input type="submit" value="Redigera">
    </form>
    <form method="get" action="/drinksRemove">
    <input type="submit" value="Ta bort">
    </form>
    <a href="/"><button>Tillbaka till Meny</button></a>
    </div>
    */ ?>
    

    <form method="get" action="/drinksAdd">
        <button class="btn btn-success mb-2"type="submit">Lägg Till</button>
    </form>
    <form method="get" action="/drinksEdit">
        <button class="btn btn-warning text-white"type="submit">Redigera</button>
    </form>
    <form action="/drinksRemove">
        <button class="btn btn-lg bg-dark text-light mt-2" type="submit">Tillbaka till Meny</button>
    </form>
</div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/ChasStudentDebt/resources/views/show_drinks.blade.php ENDPATH**/ ?>