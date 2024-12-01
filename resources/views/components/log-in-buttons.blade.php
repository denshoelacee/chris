<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2 px-10 rounded-lg inline-flex items-center text-white bg-gradient-to-l from-blue-600 via-blue-600 to-sky-600']) }}>
    {{ $slot }}
</button>
