<?php
$customers = [
    0 => [
        "name" => "Phan Van Luan",
        "date_of_birth" => "2000/8/9"
    ],
    1 => [
        "name" => "Phan Van Nam",
        "date_of_birth" => "1997/7/8"
    ],
    2 => [
        "name" => "Nguyen Thanh Nam",
        "date_of_birth" => "2005/4/5"
    ]
]
?>
<?php
$to = strtotime("2000/8/9");
$from = strtotime("2000/8/9");
function search($to, $from, $customers)
{
    $result = [];
    foreach ($customers as $customer) {
        $dateOfBirth = strtotime($customer['date_of_birth']);
        if ($from <= $dateOfBirth && $dateOfBirth <= $to) {
            array_push($result, $customer);
        }
    }
    return $result;
}
print_r( search($to,$from,$customers));
?>






