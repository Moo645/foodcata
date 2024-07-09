<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/restaurant" method="POST">
                @csrf
                
                <x-forms.input name="name" label="Restaurent Name"></x-forms.input>
                <x-forms.input name="address" label="Address"></x-forms.input>

                <x-forms.button>Create</x-forms.button>
            </form>
        </div>
    </div>

</x-layout>
