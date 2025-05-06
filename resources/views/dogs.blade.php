<x-layout>
  <x-slot:heading>
      Dogs
  </x-slot:heading>

 <ul>
  @foreach ($dogs as $dog)
    <li>
      <p>Dog's name is {{$dog['name']}} and breed is {{$dog['breed']}} 🐕</p>
    </li>
  @endforeach
 </ul>
</x-layout>