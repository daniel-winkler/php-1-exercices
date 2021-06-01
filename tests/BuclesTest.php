<?php 

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

final class BuclesTest extends TestCase
{
    public function testWhile(): void
    {
      $number = 0;
      $arrayOfNumbers = [];
      
      while($number <= 5){
        $arrayOfNumbers[] = $number; // Add number to the end of the array
        $number++;
      }

      assertEquals([0,1,2,3,4,5], $arrayOfNumbers);
    }

    public function testDoWhile(): void
    {
      $number = 7;
      $arrayOfNumbers = [];
      
      do {
        $arrayOfNumbers[] = $number; // Add number to the end of the array
        $number++;
      } while($number <= 5);

      assertEquals([7], $arrayOfNumbers);
    }

    public function testFor(): void
    {
      $number = 0;
      $arrayOfNumbers = [];
      
      for($number = 0; $number <= 5; $number++){
        $arrayOfNumbers[] = $number; // Add number to the end of the array
      }

      assertEquals([0,1,2,3,4,5], $arrayOfNumbers);
    }

    public function testForeach(): void
    {
      $users = [
        ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'city' => 'Benalmádena'],
        ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'city' => 'Fuengirola'],
        ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'city' => 'Torremolinos'],
        ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'city' => 'Málaga'],
      ]; 
      $emails = [];
      
      foreach ($users as $user) { // $users hace referencia al array que va a iterar, y se declara como $user a cada elemento que va a iterarse dentro del array.
        $emails[] = $user['email']; // Add email to the end of the array
      }

      assertEquals(['carlos@correo.com','carmen@correo.com','carmelo@correo.com','carolina@correo.com'], $emails);
    }

    public function testForeachKeyValue(): void
    {
      $user = ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'city' => 'Benalmádena'];
      $arrayOfKeys = [];
      $arrayOfValues = [];
      
      foreach ($user as $key => $value) {
        $arrayOfKeys[] = $key;
        $arrayOfValues[] = $value;
      }

      assertEquals(['name','email','city'], $arrayOfKeys);
      assertEquals(['Carlos','carlos@correo.com','Benalmádena'], $arrayOfValues);
    }

    public function testEjercicio1(): void
    {
      $users = [
        ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'city' => 'Benalmádena'],
        ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'city' => 'Fuengirola'],
        ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'city' => 'Torremolinos'],
        ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'city' => 'Málaga'],
      ]; 
      $emails = [];
      
      // Conseguir un array con los correos de los usuarios utilizando foreach

      foreach ($users as $user) {
        $emails[] = $user['email'];
      }
      
      var_dump($emails); // utilizamos var_dump para imprimir un array
      echo $emails[1]; // si es un string, podemos utilizar echo

      assertEquals(['carlos@correo.com','carmen@correo.com','carmelo@correo.com','carolina@correo.com'], $emails);
    }

    public function testEjercicio2(): void
    {
      $employees = [
        ['name' => 'Carlos', 'email' => 'carlos@miempresa.net', 'city' => 'Benalmádena'],
        ['name' => 'Carmen', 'email' => 'carmen@miempresa.net', 'city' => 'Fuengirola'],
        ['name' => 'Carmelo', 'email' => 'carmelo@miempresa.net', 'city' => 'Torremolinos'],
        ['name' => 'Carolina', 'email' => 'carolina@miempresa.net', 'city' => 'Málaga'],
      ]; 
      
      // La empresa va a cambiar el dominio de los correos de miempresa.net a miempresa.com
      // Imáginate que en total son 1500 empleados...
      // Cambiar los correos de todos los empleados mediante un bucle foreach
      // Pista: 
      //   assertEquals(['carlos', 'miempresa.net'], explode("@", 'carlos@miempresa.net'))

      foreach ($employees as $key => $employee) { // $key va iterando los indices
        $identify = explode(".", $employee['email']); // explode te divide un string por el caracter indicado y te crea un array de dos elementos
        $employees[$key]['email'] = $identify[0].'.com'; // asi reasignamos el .com a cada employee accediendo a su indice correspondiente

        // $employees[$key]['email'] = str_replace('.net', '.com', $employee['email']);

      }

      foreach ($employees as $key => &$employee) { // con Ampersand hacemos referencia al elemento y no el valor en si, por tanto podemos redeclarar directamente el valor

        $employee['email'] = str_replace('.net', '.com', $employee['email']);
        
      }

      // var_dump($employees);

      assertEquals('carlos@miempresa.com', $employees[0]['email']);
      assertEquals('carolina@miempresa.com', $employees[3]['email']);
    }
}