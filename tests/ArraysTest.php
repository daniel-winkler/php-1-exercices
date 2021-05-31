<?php 

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

final class ArraysTest extends TestCase
{
    public function testArrayIndexado1(): void
    {
        // Consigue la frase esperada utilizando índices del array y concatenación
        $seasons = ["primavera", "verano", "otoño,", "invierno"]; // PHP es Case Sensitive
        $phrase = "La estación que más me gusta es el $seasons[1] y la que menos es el $seasons[3]"; // las comillas dobles puede reconocer variables dentro del string
        
        $expectedPhrase = 'La estación que más me gusta es el verano y la que menos es el invierno'; // las comillas simples php lo lee como un string puro, sin variables enmedio 
        assertEquals($expectedPhrase, $phrase);
    }

    public function testArrayAsociativo(): void // un array asociativo es uno donde los indices estan definidos como strings en vez de ir de 0 a infinito como de costumbre.
    {
        // Consigue el email del usuario utilizando la clave del array
        $user = ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'city' => 'Benalmádena']; 
        $userEmail = $user['email']; // "$user[email]" tambien valdria pero no es adecuado. más recomendable declararlo directamente como variable con el indice entre comillas simples

        assertEquals('carlos@correo.com', $userEmail);
    }

    public function testArrayMultidimensional(): void
    {
        // Consigue los datos que se piden en los asserts
        $users = [
          ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'city' => 'Benalmádena'],
          ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'city' => 'Fuengirola'],
          ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'city' => 'Torremolinos'],
          ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'city' => 'Málaga'],
        ]; 

        assertEquals('carlos@correo.com', $users[0]['email']);
        assertEquals('Torremolinos', $users[2]['city']);
        assertEquals('Carmen', $users[1]['name']);
    }

}