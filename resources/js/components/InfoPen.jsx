import React from "react";

const InfoPen = ({ data }) => {
    const renderHTML = (htmlString) => {
        return { __html: htmlString };
    };
    return (
        <div>
            <section className="flex flex-wrap bg-secondary px-8 lg:px-14 pt-32 pb-10">
                {data.map((info) => (
                    <div>
                        <div className="w-full px-6 lg:px-10 py-10 lg:py-20 bg-secondary2 ">
                            <h2 className="font-bold font-elsie text-white text-3xl mb-5 max-w-md lg:text-4xl">
                                Info Pendaftaran
                            </h2>
                            <p className="font-bold font-space text-white text-xl mb-5 max-w-md">
                                Proses Pendaftaran
                            </p>
                            <p
                                className="font-normal font-space text-base text-white mb-10 lg:text-lg"
                                dangerouslySetInnerHTML={renderHTML(
                                    info.info_pendaftaran
                                )}
                            ></p>
                        </div>
                    </div>
                ))}
            </section>
        </div>
    );
};

export default InfoPen;
