<footer>
    <p>&copy;
    <?php
    $startYear = 2017;
    $thisYear = date('Y');
    if ($startYear == $thisYear) {
        echo $startYear;
    } else {
        echo "{$startYear}&ndash;{$thisYear}";
    }
    ?>
    Vlad Dzjamko</p>
</footer>
 