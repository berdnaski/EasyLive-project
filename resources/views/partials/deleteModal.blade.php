<div class="hidden" id="delete-modal">
    <div class="flex flex-col h-screen justify-center items-center bg-black bg-opacity-80">
        <div
            class="border-2 flex flex-col items-start justify-center px-10 py-10 bg-white rounded-lg relative w-[90%] max-w-[35rem]">
            <ion-icon name="close-outline" class="absolute top-5 right-5 w-10 h-10 cursor-pointer"
                onclick="removeModal('delete-modal')"></ion-icon>

            <div class="flex flex-col justify-center items-center gap-3 w-full mt-5">
                <p class="text-xl font-semibold text-center">Voce confirma que quer deletar o item <span id="item_name"></span>?</p>

                <div class="flex justify-center items-center text-center w-full mt-8">
                    <button type="submit"
                        id="delete-button"
                        class="border rounded-lg bg-blue-500 hover:bg-blue-600 text-white px-5 py-3 font-bold text-lg p-2 flex">Deletar</button>
                </div>
            </div>
        </div>
    </div>
</div>
