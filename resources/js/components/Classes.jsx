import React from "react";
import Melukis from "../../../public/dist/img/credit/melukis2.jpg"
import Memasak from "../../../public/dist/img/credit/memasak.jpg"
import Ikan from "../../../public/dist/img/credit/mencari ikan.jpg"
import Plant from "../../../public/dist/img/credit/plant.jpg"
import Menjelajah from "../../../public/dist/img/credit/img3.jpg"
import Berkreasi from "../../../public/dist/img/credit/Berkreasi.jpg"



const Classes = () => {
    return (
        <div>
            <div class="flex flex-wrap px-10">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-semibold text-Green1 font-elsie text-3xl mb-2">
                            What's In Green World Academy?
                        </h4>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:1/3">
                    <div class="bg-white shadow-lg overflow-hidden mb-10">
                        <img
                            src={Memasak}
                            alt="Img1"
                            class="w-full"
                        />
                        <h3 class="block pl-4 mb-3 font-semibold text-Green1 font-elsie text-xl pt-2">
                            Memasak di Alam
                        </h3>
                        <p class="font-medium text-base text-secondary mb-4 pl-4">
                            Belajar memasak menggunakan kayu bakar
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:1/3">
                    <div class="bg-white shadow-lg overflow-hidden mb-10">
                        <img
                            src={Melukis}
                            alt="Img2"
                            class="w-full"
                        />
                        <h3 class="block pl-4 mb-3 font-semibold text-Green1 font-elsie text-xl pt-2">
                            Melukis
                        </h3>
                        <p class="font-medium text-base text-secondary mb-4 pl-4">
                            Melukis dengan cat-cat alami buatan sendiri
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:1/3">
                    <div class="bg-white shadow-lg overflow-hidden mb-10">
                        <img
                            src={Menjelajah}
                            alt="Img3"
                            class="w-full"
                        />
                        <h3 class="block pl-4 mb-3 font-semibold text-Green1 font-elsie text-xl pt-2">
                            Menjelajah Alam
                        </h3>
                        <p class="font-medium text-base text-secondary mb-4 pl-4">
                            Menjelajah alam bersama teman-teman
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:1/3">
                    <div class="bg-white shadow-lg overflow-hidden mb-10">
                        <img
                            src={Ikan}
                            alt="Img4"
                            class="w-full"
                        />
                        <h3 class="block pl-4 mb-3 font-semibold text-Green1 font-elsie text-xl pt-2">
                            Mencari Ikan
                        </h3>
                        <p class="font-medium text-base text-secondary mb-4 pl-4">
                            Menangkap ikan sambil membersihkan sungai
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:1/3">
                    <div class="bg-white shadow-lg overflow-hidden mb-10">
                        <img
                            src={Berkreasi}
                            alt="Img5"
                            class="w-full"
                        />
                        <h3 class="block pl-4 mb-3 font-semibold text-Green1 font-elsie text-xl pt-2">
                            Berkreasi
                        </h3>
                        <p class="font-medium text-base text-secondary mb-4 pl-4">
                            Menyalurkan imajinasi dalam bentuk nyata
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/3 xl:1/3">
                    <div class="bg-white shadow-lg overflow-hidden mb-10">
                        <img
                            src={Plant}
                            alt="Img6"
                            class="w-full"
                        />
                        <h3 class="block pl-4 mb-3 font-semibold text-Green1 font-elsie text-xl pt-2">
                            Budidaya Tanaman
                        </h3>
                        <p class="font-medium text-base text-secondary mb-4 pl-4">
                            Belajar membudidayakan tanaman untuk dunia yang lebih hijau dan asri
                        </p>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Classes;
