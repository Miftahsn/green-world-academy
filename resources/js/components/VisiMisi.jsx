import React from "react";
import Tree1 from "../../../public/dist/img/credit/tree2.png";
import Leaf from "../../../public/dist/img/credit/leaf.png";

const VisiMisi = ({data}) => {
    const renderHTML = (htmlString) => {
        return { __html: htmlString };
    };
    return (
        <div>
            <div className="pb-20 pt-20 pr-10 pl-10 bg-white">
            {data.map((profile) => (
                <div className="flex flex-wrap ml-5 mb-10">
                    <div className="w-full px-4 pt-10 mb-10 lg:w-1/2">
                        <div class="max-w-sm rounded overflow-hidden">
                            <img
                                class="w-full"
                                src={Tree1}
                                alt="tree1"
                                className="w-full "
                            />
                        </div>
                    </div>
                    <div className="w-full px-4 py-8 lg:w-1/2">
                        <h2 className="font-bold font-elsie text-Green1 text-3xl mb-5 max-w-md lg:text-4xl">
                            Visi
                        </h2>
                        <p className="font-normal font-space text-base text-secondary max-w-xl lg:text-lg" dangerouslySetInnerHTML={renderHTML(profile.visi)}>
                        </p>
                        <h2 className="font-bold font-elsie pt-8 text-Green1 text-3xl mb-5 max-w-md lg:text-4xl">
                            Misi
                        </h2>
                        <div className="font-normal font-space text-base text-secondary max-w-xl lg:text-lg"  dangerouslySetInnerHTML={renderHTML(profile.misi)}>
                            
                        </div>
                    </div>
                </div>
                ))}
            </div>
        </div>
    );
};

export default VisiMisi;
