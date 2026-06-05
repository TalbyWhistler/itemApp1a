function testFunction0()
{
    console.log("test function 0");
}



function itemPageInit()
{
    console.log('itemPageInit');
    itemAttachStyleSheet();
    fetchCitiesForItems();
    fetchItemsForItems();
}


function itemAttachStyleSheet()
{
    const styleSheetLocation='css/item_styles.css';
    const styleLink=document.createElement('link');
    styleLink.rel='stylesheet';
    styleLink.type='text/css';
    styleLink.href=styleSheetLocation;
    document.head.appendChild(styleLink);
}


function callBackend(inputFunction,parameters,callback)
{
    let fetchTarget='php/item_php_backend_0.php';
    let inputPackage={function:inputFunction,params:parameters};
    inputPackage=JSON.stringify(inputPackage);
    fetch(fetchTarget, 
        {
            method:'POST',
            headers:{'Content-Type':'application/json'},
            body:inputPackage
        }
    )
    .then(response=>response.json())
    .then(data=>callback(data));
}

function printInfoByCity(data)
{
    let output=document.getElementById("itemInfoOutputArea");
    try 
    {
        if (data.length==0)
        {
            output.innerHTML='';
            return false;
        }
    }
    catch(e)
    {
        output.innerHTML='';
        return false;
    }
    let tableOpener = 
    `
        <table class="itemInfoTable" id="infoByCityTable"><tbody>
    `;
    let tableCloser=
    `
        </tbody></table>
    `;
    let tableHeader=
    `
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
    `;
    let tableRows='';
    for(let i=0;i<data.length;i++)
    {
        console.log(data[i]["item"],' ',data[i]["price"]);
        tableRows=tableRows+
        `
            <tr>
                <td>${data[i]["item"]}</td>
                <td>${data[i]["price"]}</td>
            </tr>
        `;
    }
    let fullOutput=tableOpener+tableHeader+tableRows+tableCloser;
    output.innerHTML=fullOutput;
}

function printInfoByItem(data)
{
    let output=document.getElementById("itemInfoOutputArea");
    try 
    {
        if (data.length==0)
        {
            output.innerHTML='';
            return false;
        }
    }
    catch(e)
    {
        output.innerHTML='';
        return false;
    }
    let tableOpener = 
    `
        <table class="itemInfoTable" id="infoByItemTable"><tbody>
    `;
    let tableCloser=
    `
        </tbody></table>
    `;
    let tableHeader=
    `
        <tr>
            <th>City</th>
            <th>Price</th>
        </tr>
    `;
    let tableRows='';
    for(let i=0;i<data.length;i++)
    {
        tableRows=tableRows+
        `
        <tr>
            <td>${data[i]["city"]}</td>
            <td>${data[i]["price"]}</td>
        </tr>
        `;
    }
    let fullOutput=tableOpener+tableHeader+tableRows+tableCloser;
    output.innerHTML=fullOutput;
}

function testPrint(data)
{
    console.log(data);
}

function testBackend()
{
    params={testNumber:5};
    callBackend("testFunction",params,testPrint);
}

function fetchCitiesForItems()
{
    callBackend("fetchCities",'',printCities);
}

function fetchItemsForItems()
{
    callBackend("fetchItems",'',printItems);
}

function handleItemCityClick(city)
{
    console.log('item city button hit for ' + city);
    fetchCityItemInfo(city);
}

function handleItemItemClick(item)
{
    console.log('item item button hit for ' + item);
    fetchItemInfo(item);
}

function fetchCityItemInfo(city)
{
    params={city:city};
    callBackend("fetchCityItemInfo",params,printInfoByCity);
}

function fetchItemInfo(item)
{
    params={item:item};
    callBackend("fetchItemItemInfo",params,printInfoByItem);
}

function printItems(data)
{
    let output=document.getElementById("itemButtonArea");
    let outputMessage='';
    try 
    {
        if (data.length==0)
        {
            return false;
        }
    }
    catch(e)
    {
        return false;
    }
    
    for(let i=0;i<data.length;i++)
    {
        console.log(data[i]["item"]);
        let item=data[i]["item"];
        let onclickTarget=`handleItemItemClick(${item})`;
        outputMessage=outputMessage+
        `
            <button class="itemButton" onclick="handleItemItemClick('${item}')">${item}</button>
        `;
    }
    output.innerHTML=outputMessage;
}

function printCities(data)
{
    let output=document.getElementById("cityButtonArea");
    let outputMessage='';
    try 
    {
        if (data.length==0)
        {
            return false;
        }
    }
    catch(e)
    {
        return false;
    }
    
    for(let i=0;i<data.length;i++)
    {
        console.log(data[i]["city"]);
        let city=data[i]["city"];
        outputMessage=outputMessage+
        `
            <button class="itemCityButton" onclick="handleItemCityClick('${city}')">${city}</button>
        `;
    }
    output.innerHTML=outputMessage;
}


itemPageInit();
