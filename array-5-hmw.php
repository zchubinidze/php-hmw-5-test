<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo "php-arrays-5 "  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .card{
            height:500px;
            overflow-y:scroll;
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-3 ">
        <div class="row gy-3 gy-md-4">
            <h1 class="text-center mb-3">array functions in php</h1>
            <p class="m-0">php-ში მასივის შესაქმნელად გამოიყენება array() ფუნქცია</p>
            <p class="m-0"><b>PHP-ში არის სამი სახის მასივი:</b></p>
            <ul class="m-0 list-group">
                <li class=" list-group-item">Indexed arrays - მასივი რიცხვითი ინდექსებით</li>
                <li class=" list-group-item">Associative arrays - მასივი key => value პრინციპით</li>
                <li class=" list-group-item">Multidimensional arrays - მასივი რომელიც შეიცავს ერთ ან რამდენიმე მასივს</li>
            </ul>
            <h3 class="text-danger">PHP-ს გააჩნია ჩაშენებული ფუნქციები, რომელიც შეგვიძლია გამოვიყენოთ მასივებთან მუშაობისას:</h3>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">1. array_change_key_case()</h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_change_key_case() - ფუნქცია ცვლის მასივის ყველა key-ს პატარა ან დიდ სიმბოლოებში.</p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_change_key_case(array, case)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43")
                            print_r(array_change_key_case($age,CASE_UPPER));
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
                            print_r(array_change_key_case($age,CASE_UPPER));?>
                        </p>
                    </div>
                </div>
            </div>

              <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">2. array_combine() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_combine()  - ფუნქცია აერთიანებს ორ მასივს და გადაყავს ერთ მასივში,  ცალ-ცალკე აღებული key მასივის და value  მასივის ელემენტების გამოყენებით.აბრუნებს ახალ მასივს key=>value სახით</p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_combine(keys, values)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $fname=array("Peter","Ben","Joe");
                            $age=array("35","37","43");
                            $c=array_combine($fname,$age);<br>
                            print_r($c);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $fname=array("Peter","Ben","Joe");
                            $age=array("35","37","43");
                            $c=array_combine($fname,$age);
                            print_r($c);?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">3. array_count_values() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_count_values()  - ფუნქცია აბრუნებს ასოციაციურ მასივს, სადაც key არის მოცემული მასივის მნიშვნელობები და value არის შემთხვევების რაოდენობა</p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_count_values(array)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a=array("A", "Cat", "Dog", "A", "Dog", "b");
                            print_r(array_count_values($a));
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array("A", "Cat", "Dog", "A", "Dog", "b");
                            print_r(array_count_values($a));?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">4. array_diff() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_diff() - ფუნქცია ადარებს ორი ან მეტი მასივის მნიშვნელობებს (value) და აბრუნებს განსხვავებას</p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_diff(array1, array2, array3, ...)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
                            $a2=array("e"=>"red","f"=>"black","g"=>"purple");
                            $a3=array("a"=>"red","b"=>"black","h"=>"yellow");
                            $result=array_diff($a1,$a2,$a3);<br>
                            print_r($result);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
                            $a2=array("e"=>"red","f"=>"black","g"=>"purple");
                            $a3=array("a"=>"red","b"=>"black","h"=>"yellow");

                            $result=array_diff($a1,$a2,$a3);
                            print_r($result);?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">5. array_diff_assoc() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_diff_assoc()- ფუნქცია ადარებს ორი ან მეტი მასივის key-ს და value-ს და აბრუნებს განსხვავებას რომლებიც არ არის array2-ში ან array3-ში და ა.შ</p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_diff_assoc(array1,array2,array3...)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
                            $a2=array("a"=>"red","b"=>"green","c"=>"purple");

                            $result=array_diff_assoc($a1,$a2);<br>
                            print_r($result);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
                            $a2=array("a"=>"red","b"=>"green","c"=>"purple");

                            $result=array_diff_assoc($a1,$a2);
                            print_r($result);?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">6. array_fill() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_fill()- ფუნქცია ავსებს მასივს მნიშვნელობებით და აბრუნებს შევსებულ მასივს</p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_fill(index, number(რაოდენობა), value)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a1=array_fill(3,4,"blue", );<br>
                            $b1=array_fill(0,2,"red");<br>
                            print_r($a1);<br>
                            print_r($b1);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a1=array_fill(3,4,"blue", );
                            $b1=array_fill(0,2,"red");
                            print_r($a1);
                            echo "<br>";
                            print_r($b1);?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">7. array_fill_keys() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_fill_keys()- ფუნქცია ავსებს მასივს მნიშვნელობებით key-ს მიხედვით და აბრუნებს შევსებულ მასივს</p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_fill_keys(keys, value)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $keys=array("a","b","c","d");<br>
                            $a1=array_fill_keys($keys,"blue");<br>
                            print_r($a1);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $keys=array("a","b","c","d");
                            $a1=array_fill_keys($keys,"blue");
                            print_r($a1);?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">8. array_flip() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_flip()- ფუნქცია key-ს და value-ს ატრიალებს(ანუ key ხდება value და value ხდება key)</p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_flip(array)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");<br>
                            $result=array_flip($a1);<br>
                            print_r($result);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
                            $result=array_flip($a1);
                            print_r($result);?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">9. array_intersect() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_intersect()- ფუნქცია ადარებს ორი (ან მეტი) მასივის მნიშვნელობებს (value)და აბრუნებს დამთხვევებს რომლებიც იქნება array2-ში , array3-ში და ა.შ.</p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_intersect(array1, array2, array3, ...)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");<br>
                            $a2=array("e"=>"red","f"=>"black","g"=>"purple");<br>
                            $a3=array("a"=>"red","b"=>"black","h"=>"yellow");<br>
                            $result=array_intersect($a1,$a2,$a3);<br>
                            print_r($result);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
                            $a2=array("e"=>"red","f"=>"black","g"=>"purple");
                            $a3=array("a"=>"red","b"=>"black","h"=>"yellow");
                            $result=array_intersect($a1,$a2,$a3);
                            print_r($result);?>
                        </p>
                    </div>
                </div>
            </div>
           
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">10. array_intersect_assoc() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_intersect_assoc()- ფუნქცია ადარებს ორი (ან მეტი) მასივს key-ს და value-ს მიხედვით და აბრუნებს  დამთხვევებს </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_intersect_assoc(array1,array2,array3, ...)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");<br>
                            $a2=array("a"=>"red","b"=>"green","g"=>"blue");<br>
                            $a3=array("a"=>"red","b"=>"green","g"=>"blue");<br>
                            $result=array_intersect_assoc($a1,$a2,$a3);<br>
                            print_r($result);
                        <p class="text-center">output</p>
                        <p ><?php
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
                            $a2=array("a"=>"red","b"=>"green","g"=>"blue");
                            $a3=array("a"=>"red","b"=>"green","g"=>"blue");
                            $result=array_intersect_assoc($a1,$a2,$a3);
                            print_r($result);?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">11. array_key_exists() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_key_exists()- ფუნქცია ამოწმებს არის თუ არა მასივში მითითებული key და აბრუნებს true თუ key არსებობს და false თუ key არ არსებობს. </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_key_exists(key, array)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a=array("Volvo"=>"XC90","BMW"=>"X5");<br>
                            if (array_key_exists("Volvo",$a))
                            {
                                echo "Key exists!";
                            } else {
                                echo "Key does not exist!";
                            }
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array("Volvo"=>"XC90","BMW"=>"X5");
                            if (array_key_exists("Volvo",$a))
                            {
                                echo "Key exists!";
                            } else {
                                echo "Key does not exist!";
                            }?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">12. array_keys() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class="">array_keys()- ფუნქცია აბრუნებს მასივს მხორომელშიც მოცემული მასივიდან ჩაწერილი იქნება მხოლოდ  key   </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_keys(array, value, strict)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                           $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");<br>
                           print_r(array_keys($a));<br><br>
                                    value-ს მიხედვოთ ნახავს key-ს
                           $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");<br>
                           print_r(array_keys($a,"Highlander"));
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
                            print_r(array_keys($a));?>

                            <?php
                            $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
                           print_r(array_keys($a,"Highlander"));?>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">13. array_map() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_map()- ფუნქცია აგზავნის მასივის თითოეულ მნიშვნელობას გადაუგზავნის მომხმარებლის მიერ შექმნილ ფუნქციას, რომელიც განსაზღვრავს რისი გაკეთება გვსურს მასივის თითოეულ ელემენტზე (გავამრავლოთ რაიმე რიცხვზე, შევცვალოთ რომელიმე value და.ა. შ) და აბრუნებს მასივს ახალი მნიშვნელობებით  </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_map(myfunction, array1, array2, array3, ...)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                           function myfunction($v1,$v2){<br>
                            
                            if ($v1 === $v2)<br>
                            {
                            return $v1*3;
                            }<br>
                            else{
                            return $v1*$v2;}
                            }<br>

                            $a1=array(1, 3, 6, 8, 34, 56, 23);<br>
                            $a2=array(1, 33, 62, 85, 34, 56, 23);<br>
                            print_r(array_map("myfunction",$a1,$a2));
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                           function myfunction($v1,$v2)
                            {
                            if ($v1 === $v2)
                            {
                            return $v1*3;
                            }else{
                            return $v1*$v2;}
                            }
                            $a1=array(1, 3, 6, 8, 34, 56, 23);
                            $a2=array(1, 33, 62, 85, 34, 56, 23);
                            print_r(array_map("myfunction",$a1,$a2));?>

                        </p>
                    </div>
                </div>
            </div>

             <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">14. array_merge() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_merge()- ფუნქცია აერთიანებს ორ ან მეტ  მასივს, და აბრუნებს გაერთიანებულ მასივს, თუ ასოციაციურ(key=>value) ორ ან მეტ ელემენტს აქვს ერთი და იგივე key აბრუნებს უკანასკნელის მნიშვნელობას  </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_merge(array1, array2, array3, ...)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a1=array("a"=>"red","b"=>"green");
                            $a2=array("c"=>"blue","b"=>"yellow");
                            print_r(array_merge($a1,$a2));
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a1=array("a"=>"red","b"=>"green");
                            $a2=array("c"=>"blue","b"=>"yellow");
                            print_r(array_merge($a1,$a2));?>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">15. array_pad() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_pad()- ფუნქცია მასივში ამატებს მითითებული რაოდენობის ელემენტებს მითითებული მნიშვნელობით და აბრუნებს ახალ მასივს, თუ რაოდენობა დადებითია ამატებს ბოლოში თუ უარყოფითია-თავში </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_pad(array, size, value)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                          $a=array("red","green");<br>
                          print_r(array_pad($a,-5,"blue"));
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array("red","green");
                            print_r(array_pad($a,-5,"blue"));?>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">16.array_pop() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_pop() ფუნქცია შლის მასივის ბოლო ელემენტს. </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_pop(array)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a=array("red","green","blue");<br>
                            array_pop($a);<br>
                            print_r($a);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array("red","green","blue");
                            array_pop($a);
                            print_r($a);?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">17.array_product() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_product() ფუნქცია აბრუნებს მასივის ელემენტების მნიშვნელობების ნამრავლს </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_product(array)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a=array(5,5,2,10);<br>
                            echo(array_product($a));
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                           $a=array(5,5,2,10);
                           echo(array_product($a));?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">18.array_push() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_push() ფუნქცია ამატებს მითითებული რაოდენობის ელემენტებს მასივის ბოლოში და აბრუნებს ახალ მასივს </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_push(array, value1, value2, ...)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a=array("red","green");<br>
                            array_push($a,"blue","yellow");<br>
                            print_r($a);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array("red","green");
                            array_push($a,"blue","yellow");
                            print_r($a);?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">19.array_search() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_search() ფუნქცია მოცემულ მასივში ეძებს მნიშვნელობას (value) და არსებობის შემთხვევაში აბრუნებს შესაბამის key-ს </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_search(value, array, strict)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            a=array("a"=>"red","b"=>"green","c"=>"blue");
                            echo array_search("red",$a);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array("a"=>"red","b"=>"green","c"=>"blue");
                            echo array_search("red",$a);?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">20.array_shift() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_shift() ფუნქცია მოცემულ მასივიდან შლის პირველ ელემენტს </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_shift(array)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a=array("a"=>"red","b"=>"green","c"=>"blue");
                            echo array_shift($a);<br>
                            print_r ($a);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array("a"=>"red","b"=>"green","c"=>"blue");
                            echo array_shift($a)."<br>";
                            print_r ($a);?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">21.array_slice() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_slice() ფუნქცია მოცემულ მასივიდან აბრუნებს შერჩეულ ელემენტებს, თუ მითითებული აქვს მხოლოდ საწყისი ინდექსი (start) დააბრუნებს მის შემდეგ არსებულ ელემენტებს, თუ მითითებული აქვს რაოდენობაც, დააბრუნებს მითითებული ინდექსის მერე მითითებული რაოდენობის ელემენტებს, უარყოფითი ინდექსის დროს ათვლა დაიწყება ბოლოდან  </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_slice(array, start, length, preserve)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a=array("red","green","blue","yellow","brown");
                            print_r(array_slice($a,1,2));
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array("red","green","blue","yellow","brown");
                            print_r(array_slice($a,1,3));?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">22.array_sum() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_sum() ფუნქცია აბრუნებს მასივის ყველა ელემნტის ჯამს  </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_sum(array)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a=array(5,15,25);<br>
                            echo array_sum($a);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array(5,15,25);
                            echo array_sum($a);
                           ?>
                        </p>
                    </div>
                </div>
            </div>

             <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">23.array_slice() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_splice() ფუნქცია შლის შერჩეულ ელემენტებს მასივიდან და ანაცვლებს მას ახალი ელემენტებით. ფუნქცია ასევე აბრუნებს მასივიდან ამოღებულ ელემენტებს.  </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_splice(array1, start, length, array2)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
                            $a2=array("a"=>"purple","b"=>"orange");
                            array_splice($a1,1,2,$a2);<br>
                            print_r($a1);<br>
                            print_r(array_splice($a1,1,2,$a2));
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
                            $a2=array("a"=>"purple","b"=>"orange");
                            print_r(array_splice($a1,1,2,$a2)) ;
                            echo "-- მასივიდან ამოჭრილი ელ.";
                            echo "<br/>";
                            array_splice($a1,1,2,$a2);
                            print_r($a1);
                           
                           ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">24.array_unshift() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_unshift() ფუნქცია მოცემული მასივის თავში ამატებს ელემენტს </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_unshift(array, value1, value2, value3, ...)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a=array("a"=>"red","b"=>"green");
                            array_unshift($a,"blue");<br>
                            print_r($a);
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array("a"=>"red","b"=>"green");
                            array_unshift($a,"blue");
                            print_r($a);
                           ?>
                        </p>
                    </div>
                </div>
            </div>

             <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header text-bg-success">
                        <h6 class="text-center">25.array_values() </h6>
                    </div>
                    <div class="card-body ps-3 text-bg-info">
                        <p class=""> array_values() ფუნქცია აბრუნებს მასივს, რომელიც შეიცავს მასივის ყველა მნიშვნელობას(value) not keys  </p>
                        <p class="mb-0"><b>მას აქვს შემდეგი სინტაქსი:</b></p>
                        <p class="mb-0">array_values(array)</p>
                    </div>
                    <div class="card-footer text-bg-danger">
                        <p class="text-center mb-3">example</p>
                        <p>
                            $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");<br>
                            print_r(array_values($a));
                        </p>
                        <p class="text-center">output</p>
                        <p ><?php
                            $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
                            print_r(array_values($a));
                           ?>
                        </p>
                    </div>
                </div>
            </div>



        <div>
    </div>
</body>
</html>