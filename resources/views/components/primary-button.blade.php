<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-blue-600 text-white rounded-lg w-full px-4 py-2 hover:bg-blue-700 transition duration-200 text-xs md:text-base']) }}>
    {{ $slot }}
</button>
