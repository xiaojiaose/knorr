<?php
$create_at = date("Y-m-d H:i:s");
$continue = $sql = false;
$sex = $sex == '1' ? '男' : '女';

if (!$name || !$city || !$mobile || !$email) {
    die('无效请求');
}

// 渠道加盟
if ($type == 'channel' && $product) {
    $sql = "insert  INTO join_channels (product, name, sex, province, contact_number, email, created_at) 
    values ('$product', '$name','$sex','$city','$mobile','$email','$create_at')";
}
// 服务咨询
if ($type == 'consult' && $content) {
    $sql = "insert  INTO service_consultations (content, name, sex, province, contact_number, email, created_at) 
    values ('$content', '$name','$sex','$city','$mobile','$email','$create_at')";
}
// 我要联系
if ($type == 'connection' && $product) {
    $sql = "insert  INTO contact_us (company, business, industry, name, sex, province, contact_number, email, created_at) 
    values ('$product', '$business', '$industry', '$name','$sex','$city','$mobile','$email','$create_at')";
}
if ($sql && $db->insert($sql)) {
    $continue = true;
}

if ($continue) {
    echo "<script>location.href='/redirect?type={$type}'</script>";
} else {
    echo 'failed';
}