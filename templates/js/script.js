

var cyberworld_info = [
    {
        heading : "network",
        define : "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, similique aliquam. In alias sint accusantium sapiente, modi molestiae dolor mollitia maiores id et tempore doloribus unde reiciendis placeat earum. Nulla facilis porro dolores accusamus illo voluptas quas? Culpa sapiente est ipsum consequatur nemo facere consectetur aperiam consequuntur molestiae adipisci ad ab unde iste veritatis totam delectus hic dignissimos expedita quos exercitationem error similique, corporis mollitia odio. Cumque itaque eius voluptatum corrupti, nisi ea ullam est voluptatem hic consectetur iusto porro, minima qui consequuntur. Adipisci dolore minima aliquid in ipsa vero optio magnam, nesciunt, alias maxime incidunt fugit officiis? Itaque, ab!",
    },
    {
        heading : "ransomeware",
        define : "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, similique aliquam. In alias sint accusantium sapiente, modi molestiae dolor mollitia maiores id et tempore doloribus unde reiciendis placeat earum. Nulla facilis porro dolores accusamus illo voluptas quas? Culpa sapiente est ipsum consequatur nemo facere consectetur aperiam consequuntur molestiae adipisci ad ab unde iste veritatis totam delectus hic dignissimos expedita quos exercitationem error similique, corporis mollitia odio. Cumque itaque eius voluptatum corrupti, nisi ea ullam est voluptatem hic consectetur iusto porro, minima qui consequuntur. Adipisci dolore minima aliquid in ipsa vero optio magnam, nesciunt, alias maxime incidunt fugit officiis? Itaque, ab!",
    },
    {
        heading : "write data heading",
        define : "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, similique aliquam. In alias sint accusantium sapiente, modi molestiae dolor mollitia maiores id et tempore doloribus unde reiciendis placeat earum. Nulla facilis porro dolores accusamus illo voluptas quas? Culpa sapiente est ipsum consequatur nemo facere consectetur aperiam consequuntur molestiae adipisci ad ab unde iste veritatis totam delectus hic dignissimos expedita quos exercitationem error similique, corporis mollitia odio. Cumque itaque eius voluptatum corrupti, nisi ea ullam est voluptatem hic consectetur iusto porro, minima qui consequuntur. Adipisci dolore minima aliquid in ipsa vero optio magnam, nesciunt, alias maxime incidunt fugit officiis? Itaque, ab!",
    },
    {
        heading : "define data",
        define : "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, similique aliquam. In alias sint accusantium sapiente, modi molestiae dolor mollitia maiores id et tempore doloribus unde reiciendis placeat earum. Nulla facilis porro dolores accusamus illo voluptas quas? Culpa sapiente est ipsum consequatur nemo facere consectetur aperiam consequuntur molestiae adipisci ad ab unde iste veritatis totam delectus hic dignissimos expedita quos exercitationem error similique, corporis mollitia odio. Cumque itaque eius voluptatum corrupti, nisi ea ullam est voluptatem hic consectetur iusto porro, minima qui consequuntur. Adipisci dolore minima aliquid in ipsa vero optio magnam, nesciunt, alias maxime incidunt fugit officiis? Itaque, ab!",
    }
]

function infoLayout(data)
{
    return (`
    
        <div class="p-2 dl my-2 border-bottom">
        
            <div class="h4 text-dark p-2"> ${data.heading} </div>

            <div class="text-muted p-2"> ${data.define} </div>

        </div>
    
    `)
}

let info = document.getElementById('cyberworld_info')

for (let i = 0; i < cyberworld_info.length; i++)
{
    info.insertAdjacentHTML("afterbegin",infoLayout(cyberworld_info[i]))
}

let search = document.getElementById("searchbar")

    let data_list = document.querySelectorAll("#cyberworld_info > .dl")

    search.onkeyup = () =>
    {        
        for(var i = 0; i < data_list.length; i++)
        {
            let data = data_list[i].firstElementChild.innerHTML
            
            // data = data.firstElementChild.innerHTML + data.lastElementChild.innerHTML
            
            data = data.toUpperCase() // final data pick

            console.log(data)
            
            /* if search value inner words match with data than display block else none */
            
            if (data.indexOf(search.value.toUpperCase()) > -1)
            {
                data_list[i].classList.add('d-block')            
            }
            else
            {
                data_list[i].classList.add('d-none')
            }
        }
    }