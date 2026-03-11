<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>relay-api API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "https://relay-api.blumilk.local.env";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.8.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.8.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-hello">
                                <a href="#endpoints-GETapi-hello">GET api/hello</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-devices">
                                <a href="#endpoints-GETapi-devices">GET api/devices</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-devices">
                                <a href="#endpoints-POSTapi-devices">POST api/devices</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-devices--uuid-">
                                <a href="#endpoints-GETapi-devices--uuid-">GET api/devices/{uuid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-devices--uuid-">
                                <a href="#endpoints-PUTapi-devices--uuid-">PUT api/devices/{uuid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-devices--uuid-">
                                <a href="#endpoints-DELETEapi-devices--uuid-">DELETE api/devices/{uuid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-devices-with-qr">
                                <a href="#endpoints-POSTapi-devices-with-qr">POST api/devices/with-qr</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-devices--device_uuid--qr">
                                <a href="#endpoints-GETapi-devices--device_uuid--qr">GET api/devices/{device_uuid}/qr</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: March 11, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>https://relay-api.blumilk.local.env</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://relay-api.blumilk.local.env/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-hello">GET api/hello</h2>

<p>
</p>



<span id="example-requests-GETapi-hello">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://relay-api.blumilk.local.env/api/hello" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/hello"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-hello">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Hello, World!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-hello" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-hello"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-hello"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-hello" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-hello">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-hello" data-method="GET"
      data-path="api/hello"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-hello', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-hello"
                    onclick="tryItOut('GETapi-hello');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-hello"
                    onclick="cancelTryOut('GETapi-hello');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-hello"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/hello</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-hello"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-hello"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-devices">GET api/devices</h2>

<p>
</p>



<span id="example-requests-GETapi-devices">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://relay-api.blumilk.local.env/api/devices" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/devices"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-devices">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;uuid&quot;: &quot;3eb6686f-77f5-3b9e-a230-b7916437d194&quot;,
        &quot;name&quot;: &quot;Device 3799&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-1054&quot;,
        &quot;brand&quot;: &quot;Orn, Friesen and Ortiz&quot;,
        &quot;serial_number&quot;: &quot;SN-78294004&quot;,
        &quot;location&quot;: &quot;217 Crooks Isle Suite 481\nMayerfort, NJ 50977&quot;,
        &quot;installation_date&quot;: &quot;2011-06-05T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Tempora ratione voluptatem dolore distinctio quia. Non aliquam voluptas non doloribus qui. Aliquam ad possimus similique quia.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;uuid&quot;: &quot;101cd10f-146e-39fc-ab89-d8231eced6cb&quot;,
        &quot;name&quot;: &quot;Device 4174&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-9904&quot;,
        &quot;brand&quot;: &quot;Hudson-DuBuque&quot;,
        &quot;serial_number&quot;: &quot;SN-07639332&quot;,
        &quot;location&quot;: &quot;978 Fadel Locks\nVilmahaven, DC 23682-2737&quot;,
        &quot;installation_date&quot;: &quot;1977-02-03T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Laudantium laboriosam quae doloremque repellat eaque consequuntur. Officia adipisci eos et rerum ut unde qui vel.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;uuid&quot;: &quot;1059cd91-00ef-31e0-9a80-1f33dd4c4c7e&quot;,
        &quot;name&quot;: &quot;Device 1397&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-7181&quot;,
        &quot;brand&quot;: &quot;Ankunding, Barrows and Collins&quot;,
        &quot;serial_number&quot;: &quot;SN-93383906&quot;,
        &quot;location&quot;: &quot;83071 Nicole Meadow\nWest Elianebury, PA 32154&quot;,
        &quot;installation_date&quot;: &quot;2023-12-16T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Qui saepe voluptatem et. Blanditiis fugiat velit quas saepe adipisci dolor expedita. Et similique occaecati dolor minima dolore reprehenderit ad.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;uuid&quot;: &quot;e4b19993-261c-37e3-a87b-fe8eb6631641&quot;,
        &quot;name&quot;: &quot;Device 2051&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-8947&quot;,
        &quot;brand&quot;: &quot;Wolf Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-10435359&quot;,
        &quot;location&quot;: &quot;22024 Brekke Heights\nNew Reed, MO 61159&quot;,
        &quot;installation_date&quot;: &quot;2006-12-13T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Aut nisi qui aut eaque. Autem quod aspernatur architecto unde velit. Omnis et officiis repudiandae at recusandae ducimus quae. Dolores alias autem laborum labore error.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;uuid&quot;: &quot;3d962215-bbec-3ec8-91ca-dca09548124b&quot;,
        &quot;name&quot;: &quot;Device 9173&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-1833&quot;,
        &quot;brand&quot;: &quot;Krajcik, Kozey and Denesik&quot;,
        &quot;serial_number&quot;: &quot;SN-83316601&quot;,
        &quot;location&quot;: &quot;2444 Mayert Center Apt. 042\nHagenesfort, IN 27281-4719&quot;,
        &quot;installation_date&quot;: &quot;1982-05-21T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Sit est itaque adipisci nisi et maiores soluta. Nihil aut culpa corrupti ut ducimus omnis officiis eligendi. Voluptatibus deleniti eius suscipit reiciendis facere et non. Sit quia quo dolorum sint.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;uuid&quot;: &quot;29c649d9-b812-3349-853d-fd522d503242&quot;,
        &quot;name&quot;: &quot;Device 3772&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-8517&quot;,
        &quot;brand&quot;: &quot;Buckridge Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-57625231&quot;,
        &quot;location&quot;: &quot;9247 Mathilde Lodge\nRaleighfort, AZ 64202&quot;,
        &quot;installation_date&quot;: &quot;2010-02-28T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Esse recusandae tempora aut nesciunt accusantium et. At voluptatem voluptatem blanditiis necessitatibus. Molestiae aliquid maiores harum.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;uuid&quot;: &quot;a498e12b-6c07-33e0-885c-e7c9fa3e1281&quot;,
        &quot;name&quot;: &quot;Device 6509&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-7327&quot;,
        &quot;brand&quot;: &quot;Larkin, Yundt and Kirlin&quot;,
        &quot;serial_number&quot;: &quot;SN-17228521&quot;,
        &quot;location&quot;: &quot;8698 Mireya Ridge\nZackarybury, VA 53787&quot;,
        &quot;installation_date&quot;: &quot;1983-04-06T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Aut praesentium voluptatum iure sint in mollitia quo. At praesentium voluptas est. Quidem culpa tenetur inventore magnam voluptas quia quibusdam quo.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;uuid&quot;: &quot;ef38dc86-076b-33bd-a9a3-5ddf2477ad53&quot;,
        &quot;name&quot;: &quot;Device 4708&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-6034&quot;,
        &quot;brand&quot;: &quot;Treutel, Nolan and Doyle&quot;,
        &quot;serial_number&quot;: &quot;SN-20195310&quot;,
        &quot;location&quot;: &quot;17233 Jones Locks\nSouth Alexane, TX 19071&quot;,
        &quot;installation_date&quot;: &quot;2004-09-13T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Temporibus eum voluptatum consequatur quia ut. Quia et eaque quia dolores aut.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;uuid&quot;: &quot;68309a26-e923-312b-bca8-83f2332a1831&quot;,
        &quot;name&quot;: &quot;Device 2227&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-0941&quot;,
        &quot;brand&quot;: &quot;Gutmann Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-06115935&quot;,
        &quot;location&quot;: &quot;118 Steuber Haven Apt. 067\nSouth Nellastad, NH 27497&quot;,
        &quot;installation_date&quot;: &quot;1976-01-10T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Fugit voluptate nobis amet dignissimos est ipsam dolor atque. Pariatur et sint aliquam dolore aspernatur mollitia. Quia perferendis rerum perferendis et ducimus. Quia nesciunt velit dolor numquam.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;uuid&quot;: &quot;cd878f7e-ed1b-38b2-92dd-33ec3c8278a7&quot;,
        &quot;name&quot;: &quot;Device 2014&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-3125&quot;,
        &quot;brand&quot;: &quot;Schowalter Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-77159879&quot;,
        &quot;location&quot;: &quot;4732 Mitchell Wells\nNorth Durward, ND 49470-9190&quot;,
        &quot;installation_date&quot;: &quot;1999-11-02T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Soluta et eum et aperiam dolores reiciendis. Facilis consequuntur ipsum aliquam. Suscipit veritatis ipsum quasi qui sit voluptas. Explicabo aut qui asperiores est perferendis voluptate voluptatem.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;uuid&quot;: &quot;32d07b64-702c-3393-83ae-2418fbdb3962&quot;,
        &quot;name&quot;: &quot;Device 5760&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-1921&quot;,
        &quot;brand&quot;: &quot;Torp-Hegmann&quot;,
        &quot;serial_number&quot;: &quot;SN-82253549&quot;,
        &quot;location&quot;: &quot;3583 Quigley Branch\nMcKenzietown, VA 69326-2150&quot;,
        &quot;installation_date&quot;: &quot;1997-11-21T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Velit earum nulla expedita vel sint nesciunt. Quis dicta sint deserunt doloremque similique quibusdam. Qui fugit nemo suscipit dignissimos eius amet.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;uuid&quot;: &quot;90043abb-01b1-3044-87d3-3b3d3c3afb75&quot;,
        &quot;name&quot;: &quot;Device 4644&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-5659&quot;,
        &quot;brand&quot;: &quot;Walter Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-67600245&quot;,
        &quot;location&quot;: &quot;54218 Palma Islands Apt. 103\nKlingport, IA 79864&quot;,
        &quot;installation_date&quot;: &quot;2017-01-03T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Veritatis esse mollitia id. Veniam dolore et minus sed voluptas. Sit expedita rerum ullam fuga dolor praesentium ab. Aut et alias officiis ut dolorum debitis.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;uuid&quot;: &quot;597e5ce9-0504-3f02-bc72-554276479dff&quot;,
        &quot;name&quot;: &quot;Device 2552&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-6605&quot;,
        &quot;brand&quot;: &quot;Schiller Ltd&quot;,
        &quot;serial_number&quot;: &quot;SN-02537331&quot;,
        &quot;location&quot;: &quot;40288 Ritchie Streets\nNew Adonis, OH 37420&quot;,
        &quot;installation_date&quot;: &quot;1996-12-26T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Vel rerum et corporis officiis dolor sed. Laudantium temporibus quos omnis corrupti minima. Omnis aut deleniti possimus repellendus perferendis.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;uuid&quot;: &quot;b0f2390f-e4b1-3f22-8445-7649ccf9d536&quot;,
        &quot;name&quot;: &quot;Device 8935&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-2199&quot;,
        &quot;brand&quot;: &quot;Jenkins, Emard and Mante&quot;,
        &quot;serial_number&quot;: &quot;SN-03178596&quot;,
        &quot;location&quot;: &quot;43713 Dan Street\nTrentonview, IN 22602&quot;,
        &quot;installation_date&quot;: &quot;2024-05-29T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Possimus sit et tenetur blanditiis voluptas eum. Qui aut iure quis ipsam est magnam. Ut nemo omnis in optio.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;uuid&quot;: &quot;9ef232ba-026a-36a2-843f-2e0dee971d88&quot;,
        &quot;name&quot;: &quot;Device 4758&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-3103&quot;,
        &quot;brand&quot;: &quot;O&#039;Reilly Ltd&quot;,
        &quot;serial_number&quot;: &quot;SN-20387392&quot;,
        &quot;location&quot;: &quot;6289 Dovie Village Suite 592\nLuettgenville, NM 87006-8157&quot;,
        &quot;installation_date&quot;: &quot;2021-03-30T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Eos non laboriosam dolore ut error dolor. Officiis ea reprehenderit ut doloribus. Veniam aut eius in consequuntur a.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;uuid&quot;: &quot;0e783001-09dc-3afa-90af-212e68fa05d2&quot;,
        &quot;name&quot;: &quot;Device 8879&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-9204&quot;,
        &quot;brand&quot;: &quot;Funk-Ziemann&quot;,
        &quot;serial_number&quot;: &quot;SN-28194523&quot;,
        &quot;location&quot;: &quot;87152 Brown Knoll\nVandervortport, NJ 08954&quot;,
        &quot;installation_date&quot;: &quot;1977-10-06T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Ipsam et ducimus nisi eum. Illo eos a minima nulla. Eligendi ut odit ut earum commodi cupiditate enim. Natus vero dicta et omnis. Voluptas facilis nihil libero non mollitia.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;uuid&quot;: &quot;87a65cdc-7ca8-346d-9346-82393e922f21&quot;,
        &quot;name&quot;: &quot;Device 7985&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-2655&quot;,
        &quot;brand&quot;: &quot;Yost and Sons&quot;,
        &quot;serial_number&quot;: &quot;SN-08878954&quot;,
        &quot;location&quot;: &quot;7042 Miller Keys Apt. 403\nNorth Aronborough, MS 27079&quot;,
        &quot;installation_date&quot;: &quot;2022-02-19T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Aut enim odit nisi enim. Eos reprehenderit aspernatur quod officia deleniti. Eos tempore iste magni.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;uuid&quot;: &quot;85720feb-c8c3-3fcd-a3d8-7da302708628&quot;,
        &quot;name&quot;: &quot;Device 7705&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-9745&quot;,
        &quot;brand&quot;: &quot;Auer-Dickens&quot;,
        &quot;serial_number&quot;: &quot;SN-67482893&quot;,
        &quot;location&quot;: &quot;502 Abshire Branch\nJuliannetown, IA 54139&quot;,
        &quot;installation_date&quot;: &quot;2004-07-24T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Culpa quaerat a quo et ut. Qui et tempora ut minima unde incidunt. Consequatur quisquam dolorem vitae qui dicta. Et ratione tempore facilis odio.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;uuid&quot;: &quot;080090f2-8ab7-3c87-9a89-6bb95c670fae&quot;,
        &quot;name&quot;: &quot;Device 3254&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-4759&quot;,
        &quot;brand&quot;: &quot;Lindgren, McGlynn and Wuckert&quot;,
        &quot;serial_number&quot;: &quot;SN-71525016&quot;,
        &quot;location&quot;: &quot;6316 Bernhard Tunnel Apt. 439\nMayertstad, MI 66485-4486&quot;,
        &quot;installation_date&quot;: &quot;2011-05-16T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Iste saepe sapiente qui. Porro cumque deserunt autem asperiores eum. Eum quia autem inventore dolor corporis neque.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;uuid&quot;: &quot;fee94d26-0534-367f-b8b0-0e2c6cd67d37&quot;,
        &quot;name&quot;: &quot;Device 1016&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-7739&quot;,
        &quot;brand&quot;: &quot;O&#039;Kon-Cruickshank&quot;,
        &quot;serial_number&quot;: &quot;SN-42802166&quot;,
        &quot;location&quot;: &quot;404 Mraz Squares Suite 324\nEast D&#039;angelochester, OH 00068-7642&quot;,
        &quot;installation_date&quot;: &quot;2010-06-24T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Voluptatum explicabo autem repudiandae nisi enim aut. Doloremque ut est et architecto quisquam cumque laborum ea. Quis quae omnis eius aut consequatur nulla et. Deserunt optio autem voluptatem.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;uuid&quot;: &quot;71bece54-f369-380d-8bce-6490a0ec5272&quot;,
        &quot;name&quot;: &quot;Device 9697&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-8689&quot;,
        &quot;brand&quot;: &quot;Schowalter-Lueilwitz&quot;,
        &quot;serial_number&quot;: &quot;SN-81462066&quot;,
        &quot;location&quot;: &quot;4291 Deckow Cape Suite 732\nNew Lonniehaven, MO 35969-8047&quot;,
        &quot;installation_date&quot;: &quot;2026-03-09T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Sunt id nihil fuga cupiditate accusantium. Praesentium voluptatem ipsa qui libero minus minus velit. Quo ut perferendis ipsam. Corrupti et sit tenetur quaerat dignissimos ut.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;uuid&quot;: &quot;c084c9a8-c34f-3cfb-b5b4-b7b1927ccf1e&quot;,
        &quot;name&quot;: &quot;Device 5181&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-6902&quot;,
        &quot;brand&quot;: &quot;Bernhard Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-77855201&quot;,
        &quot;location&quot;: &quot;75171 Mary Curve Suite 544\nSchaefershire, VT 82566&quot;,
        &quot;installation_date&quot;: &quot;2024-12-28T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Eum voluptatem quidem reprehenderit consequatur. In quasi quam eveniet quas et minima. Beatae nesciunt aut quia est id assumenda.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;uuid&quot;: &quot;1037bb88-5d2b-3144-938c-da50da6f99bf&quot;,
        &quot;name&quot;: &quot;Device 3633&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-4010&quot;,
        &quot;brand&quot;: &quot;Hahn, Hilpert and Reilly&quot;,
        &quot;serial_number&quot;: &quot;SN-40652360&quot;,
        &quot;location&quot;: &quot;40998 Eunice Circle\nWittingville, KS 51891-7498&quot;,
        &quot;installation_date&quot;: &quot;2000-02-04T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Deleniti quos quia maxime nisi aspernatur. Quis natus qui aut. Perferendis harum ullam totam qui. Veritatis non molestiae reprehenderit deleniti.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;uuid&quot;: &quot;259aabfa-d712-391c-973a-ae20725f44ff&quot;,
        &quot;name&quot;: &quot;Device 5797&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-4320&quot;,
        &quot;brand&quot;: &quot;Dibbert and Sons&quot;,
        &quot;serial_number&quot;: &quot;SN-58144080&quot;,
        &quot;location&quot;: &quot;832 Clement Roads\nNorth Rebecca, MO 85820-3295&quot;,
        &quot;installation_date&quot;: &quot;2006-03-24T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Animi voluptatum voluptas rerum voluptate sint vitae. Sunt id sequi est asperiores veritatis fuga laudantium. Eius dolores dolorem qui. Eos earum quia amet error ratione veritatis voluptas.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;uuid&quot;: &quot;3a5befb3-f007-3121-952e-d542ef6903a0&quot;,
        &quot;name&quot;: &quot;Device 8764&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-7392&quot;,
        &quot;brand&quot;: &quot;Breitenberg PLC&quot;,
        &quot;serial_number&quot;: &quot;SN-15425024&quot;,
        &quot;location&quot;: &quot;439 Marlin Row\nPort Jany, WI 66173-9947&quot;,
        &quot;installation_date&quot;: &quot;1985-01-28T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Nihil quo incidunt molestiae non. Voluptas laudantium fugiat eligendi ut enim expedita. Asperiores a ex eligendi.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;uuid&quot;: &quot;bbdbdb28-9a50-3b01-a802-3844930ab0cb&quot;,
        &quot;name&quot;: &quot;Device 4266&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-0759&quot;,
        &quot;brand&quot;: &quot;Treutel-Jones&quot;,
        &quot;serial_number&quot;: &quot;SN-12999862&quot;,
        &quot;location&quot;: &quot;62453 Jaskolski Terrace Suite 463\nGradyton, NM 14932&quot;,
        &quot;installation_date&quot;: &quot;2005-05-27T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Vitae nostrum dolorem cupiditate. Et est aut placeat iste aliquam officiis sunt. Sunt sapiente sed nihil. Aliquid nobis laboriosam et eius.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;uuid&quot;: &quot;9efe697c-4812-3e7c-bf7f-e6450b76b5e8&quot;,
        &quot;name&quot;: &quot;Device 5579&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-1061&quot;,
        &quot;brand&quot;: &quot;Erdman-Roob&quot;,
        &quot;serial_number&quot;: &quot;SN-73444768&quot;,
        &quot;location&quot;: &quot;32082 Bernhard Stream Apt. 181\nLake Lorenza, AL 07663&quot;,
        &quot;installation_date&quot;: &quot;1973-10-27T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Distinctio ratione consectetur dolor minus eveniet nulla soluta minus. Quo facilis exercitationem nisi modi animi est. Enim nisi laborum excepturi et odit aut.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;uuid&quot;: &quot;830552c4-7ea5-36ce-a3d6-c4346a288253&quot;,
        &quot;name&quot;: &quot;Device 3192&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-6915&quot;,
        &quot;brand&quot;: &quot;Boyle, Maggio and Williamson&quot;,
        &quot;serial_number&quot;: &quot;SN-94943599&quot;,
        &quot;location&quot;: &quot;144 Aufderhar Ridges\nWest Paige, NY 94522-2222&quot;,
        &quot;installation_date&quot;: &quot;1991-02-18T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Voluptatem vero facere nostrum excepturi. Laborum dolores saepe soluta mollitia. Dolore culpa ea ducimus quibusdam accusamus. Voluptatem quae voluptas omnis quis cupiditate.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;uuid&quot;: &quot;629cba53-d559-34e8-b578-421f29f4b731&quot;,
        &quot;name&quot;: &quot;Device 6530&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-0225&quot;,
        &quot;brand&quot;: &quot;Marquardt and Sons&quot;,
        &quot;serial_number&quot;: &quot;SN-14945276&quot;,
        &quot;location&quot;: &quot;154 Abernathy Meadow\nMcGlynnfurt, ME 46849-3161&quot;,
        &quot;installation_date&quot;: &quot;1994-09-23T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Quaerat praesentium repudiandae accusamus aut. Quasi voluptas rerum sit vel. Qui quas ut et laudantium. Qui corporis debitis ab quam delectus. Ducimus totam delectus officia minima minima eum magni.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;uuid&quot;: &quot;cc60ed20-06cd-3534-8834-c0683572b21b&quot;,
        &quot;name&quot;: &quot;Device 4825&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-5849&quot;,
        &quot;brand&quot;: &quot;Stiedemann-Bernier&quot;,
        &quot;serial_number&quot;: &quot;SN-38115298&quot;,
        &quot;location&quot;: &quot;56885 Tiffany Overpass Suite 545\nValerieside, LA 26748&quot;,
        &quot;installation_date&quot;: &quot;1996-05-30T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Dolorem vel doloribus quia rem. Quibusdam blanditiis quos quae libero. Quaerat sequi nobis sit dignissimos perspiciatis et dolorem qui. Nihil id nam non sunt dolorum enim in.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;uuid&quot;: &quot;53d48c05-480f-35ff-ad7d-ff2fe018721c&quot;,
        &quot;name&quot;: &quot;Device 4692&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-2132&quot;,
        &quot;brand&quot;: &quot;Emmerich, D&#039;Amore and Stanton&quot;,
        &quot;serial_number&quot;: &quot;SN-79190930&quot;,
        &quot;location&quot;: &quot;1355 Leanna Harbor\nWest Noble, OK 52572&quot;,
        &quot;installation_date&quot;: &quot;2000-06-10T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Non quae maxime qui est. Non eaque deleniti ipsam facilis facere adipisci molestias. Ex veniam quis quae et. Itaque quo minima ut ut excepturi sed.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;uuid&quot;: &quot;4c85730b-1528-3e3b-9730-ab5ca36325e4&quot;,
        &quot;name&quot;: &quot;Device 0051&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-2990&quot;,
        &quot;brand&quot;: &quot;Cartwright, Hahn and Corkery&quot;,
        &quot;serial_number&quot;: &quot;SN-12551598&quot;,
        &quot;location&quot;: &quot;7266 Harber Parkway\nKrisburgh, MS 08608&quot;,
        &quot;installation_date&quot;: &quot;1975-11-14T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Molestiae esse ut voluptatem quibusdam voluptatibus. Ut ut aperiam quaerat ipsa odit dignissimos consectetur. Reprehenderit debitis omnis ut voluptatem error. Veniam odio et facere voluptas.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;uuid&quot;: &quot;7311f1e9-cc62-37ad-97ec-34147899d9cc&quot;,
        &quot;name&quot;: &quot;Device 0405&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-6719&quot;,
        &quot;brand&quot;: &quot;Morar-Prosacco&quot;,
        &quot;serial_number&quot;: &quot;SN-10436018&quot;,
        &quot;location&quot;: &quot;37062 Mercedes Ramp\nLake Lilyan, NY 97663&quot;,
        &quot;installation_date&quot;: &quot;1975-07-25T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Qui dolores quidem aut esse voluptates blanditiis. Eos libero omnis optio voluptas veritatis eligendi quo ratione. Possimus eum incidunt et repellat voluptatum rerum aliquid.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;uuid&quot;: &quot;f2a578aa-efcb-30d1-89ae-5a07220bb0e8&quot;,
        &quot;name&quot;: &quot;Device 0760&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-7440&quot;,
        &quot;brand&quot;: &quot;Greenfelder, Runte and Conroy&quot;,
        &quot;serial_number&quot;: &quot;SN-67470431&quot;,
        &quot;location&quot;: &quot;571 Gordon Lake Apt. 016\nChelseyborough, TX 26511-9620&quot;,
        &quot;installation_date&quot;: &quot;1999-07-21T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Doloribus recusandae et consequatur veritatis voluptatem voluptas. Voluptatibus est similique distinctio distinctio eaque non. Ducimus cum accusamus aut qui. Rerum repudiandae quia consequatur.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;uuid&quot;: &quot;4cb0628e-3419-3614-9f4f-d5fa54422d51&quot;,
        &quot;name&quot;: &quot;Device 4082&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-2676&quot;,
        &quot;brand&quot;: &quot;McCullough, Sawayn and Flatley&quot;,
        &quot;serial_number&quot;: &quot;SN-47758164&quot;,
        &quot;location&quot;: &quot;273 Lenny Green\nPort Ayanaside, AL 69908&quot;,
        &quot;installation_date&quot;: &quot;1979-12-23T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Voluptatibus sint sint animi occaecati vero. Voluptatem perspiciatis necessitatibus alias similique itaque. Eius quisquam hic dolorem veritatis sit nihil velit.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;uuid&quot;: &quot;5e6d4b58-3302-30c8-b1f0-4abeeb0e94e8&quot;,
        &quot;name&quot;: &quot;Device 7491&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-4630&quot;,
        &quot;brand&quot;: &quot;Wintheiser LLC&quot;,
        &quot;serial_number&quot;: &quot;SN-36074557&quot;,
        &quot;location&quot;: &quot;522 Willard Forks Apt. 871\nNew Aryanna, AK 14828-7541&quot;,
        &quot;installation_date&quot;: &quot;1991-10-08T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Blanditiis dignissimos architecto officia ducimus. Esse laboriosam maiores provident. Distinctio dignissimos nisi sed dolorum.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;uuid&quot;: &quot;14eb6ac4-2167-3577-b0a8-da60b1cdc977&quot;,
        &quot;name&quot;: &quot;Device 3924&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-7613&quot;,
        &quot;brand&quot;: &quot;Weber-Wolf&quot;,
        &quot;serial_number&quot;: &quot;SN-36929664&quot;,
        &quot;location&quot;: &quot;53099 Stiedemann Mountain Suite 835\nWest Piper, MI 55690&quot;,
        &quot;installation_date&quot;: &quot;2008-08-23T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Et odio sed non corrupti qui in. Eius quas necessitatibus tenetur saepe ut voluptas. Inventore eos culpa facilis delectus quidem.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;uuid&quot;: &quot;93df113b-4ba1-3c64-9cf3-ca81479e55df&quot;,
        &quot;name&quot;: &quot;Device 3073&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-4591&quot;,
        &quot;brand&quot;: &quot;Schuppe-Turner&quot;,
        &quot;serial_number&quot;: &quot;SN-39550502&quot;,
        &quot;location&quot;: &quot;23702 DuBuque Turnpike Apt. 931\nLake Eldora, AZ 15431-1293&quot;,
        &quot;installation_date&quot;: &quot;2005-09-29T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Odit et sed consequuntur fugit. Quis aliquam ut reprehenderit expedita ea. Et quia fugiat sunt deleniti officia et consectetur.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;uuid&quot;: &quot;89342624-56bb-3601-9ec0-7cc091f4e6f0&quot;,
        &quot;name&quot;: &quot;Device 3399&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-7979&quot;,
        &quot;brand&quot;: &quot;Heaney, Mayer and Fritsch&quot;,
        &quot;serial_number&quot;: &quot;SN-27401315&quot;,
        &quot;location&quot;: &quot;90094 Sonia Corner\nVernaside, ND 42043-9501&quot;,
        &quot;installation_date&quot;: &quot;2007-10-22T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Et ut est nam vel repellat ducimus aliquam. Rerum architecto placeat qui hic commodi non. Ut nostrum perspiciatis et.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;uuid&quot;: &quot;293efbc3-a170-3de8-9b1a-ab8dca1e0f2f&quot;,
        &quot;name&quot;: &quot;Device 3378&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-1975&quot;,
        &quot;brand&quot;: &quot;Rogahn, Braun and Koss&quot;,
        &quot;serial_number&quot;: &quot;SN-18851424&quot;,
        &quot;location&quot;: &quot;4470 Schaefer Tunnel Suite 915\nJaylonbury, WV 57563&quot;,
        &quot;installation_date&quot;: &quot;2005-09-16T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Ratione consectetur vel debitis quod voluptatem a. Voluptas iste illum harum maxime dolores eos. Non eos ab quam amet mollitia reprehenderit. Maiores veniam et et molestiae quia sit eum consequatur.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;uuid&quot;: &quot;b40fc594-afd2-3018-b8f9-06091a461175&quot;,
        &quot;name&quot;: &quot;Device 5208&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-0388&quot;,
        &quot;brand&quot;: &quot;Kiehn-Lowe&quot;,
        &quot;serial_number&quot;: &quot;SN-38580345&quot;,
        &quot;location&quot;: &quot;61195 Jo Forge\nPort Valentinaborough, ME 68136&quot;,
        &quot;installation_date&quot;: &quot;2023-03-18T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Reiciendis et necessitatibus sed et blanditiis fugiat assumenda. Earum ut non sint vitae quas dolorum hic tempore.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;uuid&quot;: &quot;c3ed9089-5292-3af8-90f0-a0679b47a135&quot;,
        &quot;name&quot;: &quot;Device 6069&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-8427&quot;,
        &quot;brand&quot;: &quot;Bailey-Ryan&quot;,
        &quot;serial_number&quot;: &quot;SN-13276879&quot;,
        &quot;location&quot;: &quot;20576 Triston Camp\nGillianton, MS 32821&quot;,
        &quot;installation_date&quot;: &quot;1996-06-29T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Id dolores et ipsam autem nesciunt mollitia non dolores. Molestias commodi quia corrupti quidem accusantium nemo rem. Amet totam reprehenderit sunt qui facilis sunt nihil beatae.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;uuid&quot;: &quot;935513cb-ec2e-389a-95ae-3f6d30808917&quot;,
        &quot;name&quot;: &quot;Device 5916&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-9927&quot;,
        &quot;brand&quot;: &quot;Schaden-Gutkowski&quot;,
        &quot;serial_number&quot;: &quot;SN-48229356&quot;,
        &quot;location&quot;: &quot;49104 Magnus Extensions Apt. 690\nWelchville, AZ 20144-4571&quot;,
        &quot;installation_date&quot;: &quot;1974-08-06T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Quod animi aut et neque consequatur tempore. Laboriosam cumque recusandae a sapiente necessitatibus sit.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;uuid&quot;: &quot;bf66f86a-9328-3cbd-a403-c93ced727fcd&quot;,
        &quot;name&quot;: &quot;Device 9117&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-2217&quot;,
        &quot;brand&quot;: &quot;Bins Ltd&quot;,
        &quot;serial_number&quot;: &quot;SN-91720830&quot;,
        &quot;location&quot;: &quot;145 Addison Dale\nMarquardtview, MA 94332&quot;,
        &quot;installation_date&quot;: &quot;1983-05-11T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;At et omnis totam dolores labore. Et omnis voluptas voluptatibus officia accusamus. Corporis qui aut repellat animi in. Voluptatibus quia occaecati velit. Dolor laboriosam et nihil nesciunt.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;uuid&quot;: &quot;aee95a5c-bb04-3c72-806b-be3fd99f8257&quot;,
        &quot;name&quot;: &quot;Device 8470&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-4971&quot;,
        &quot;brand&quot;: &quot;Ullrich-Kilback&quot;,
        &quot;serial_number&quot;: &quot;SN-93372530&quot;,
        &quot;location&quot;: &quot;18476 Sharon Dale\nDevynstad, MO 09062-5298&quot;,
        &quot;installation_date&quot;: &quot;2007-06-06T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Aut natus sit molestiae adipisci illo fugiat ipsam. Inventore qui aliquam quisquam voluptatibus atque quia ea. Illo asperiores impedit laboriosam fuga dolores.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;uuid&quot;: &quot;90737903-13b9-3da6-aa0e-dd5d307de3fa&quot;,
        &quot;name&quot;: &quot;Device 4206&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-2875&quot;,
        &quot;brand&quot;: &quot;Weber, Wisozk and Tillman&quot;,
        &quot;serial_number&quot;: &quot;SN-36345908&quot;,
        &quot;location&quot;: &quot;754 Brown Drive\nGiamouth, NE 84105&quot;,
        &quot;installation_date&quot;: &quot;2002-08-11T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Non saepe iure doloribus ipsam hic accusantium deserunt. Sunt quibusdam tempore odit. Voluptas qui veritatis illo id sequi.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;uuid&quot;: &quot;5559a07e-7331-300f-869a-4ba023b3c071&quot;,
        &quot;name&quot;: &quot;Device 5400&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-2940&quot;,
        &quot;brand&quot;: &quot;Williamson, Cormier and Ruecker&quot;,
        &quot;serial_number&quot;: &quot;SN-98241694&quot;,
        &quot;location&quot;: &quot;6670 Ward Wells Apt. 355\nLake Lonny, IN 81245&quot;,
        &quot;installation_date&quot;: &quot;1994-07-13T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Nihil et asperiores maiores quia delectus. Sapiente cumque dolor ea. Est autem quibusdam rerum et et rerum ullam.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;uuid&quot;: &quot;40d63b9e-f367-33b0-85ec-db6c1f61ee05&quot;,
        &quot;name&quot;: &quot;Device 7922&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-3649&quot;,
        &quot;brand&quot;: &quot;Stoltenberg-Kirlin&quot;,
        &quot;serial_number&quot;: &quot;SN-25727292&quot;,
        &quot;location&quot;: &quot;45187 Michelle Plains Apt. 307\nAnkundingview, KS 32141-2370&quot;,
        &quot;installation_date&quot;: &quot;1994-06-01T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Ut quae sed nemo iste et quisquam. Reiciendis facilis possimus aut in. Odio iure adipisci occaecati placeat accusantium. Saepe similique autem quae.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;uuid&quot;: &quot;3f68a478-bb65-327a-b14b-de5b3c93e230&quot;,
        &quot;name&quot;: &quot;Device 6904&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-4322&quot;,
        &quot;brand&quot;: &quot;Volkman LLC&quot;,
        &quot;serial_number&quot;: &quot;SN-13446415&quot;,
        &quot;location&quot;: &quot;877 West Port Suite 648\nLake Neilhaven, PA 62488-4949&quot;,
        &quot;installation_date&quot;: &quot;2001-04-07T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Sequi ab ut delectus ut reiciendis velit quis. Similique sint qui magni nisi ea sit ut. Asperiores placeat non illo. Fuga consequatur eum aut nihil.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;uuid&quot;: &quot;c9f09bc1-4461-372e-ae84-cfacaca66f52&quot;,
        &quot;name&quot;: &quot;Device 4926&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-2977&quot;,
        &quot;brand&quot;: &quot;Lehner-Stracke&quot;,
        &quot;serial_number&quot;: &quot;SN-69668030&quot;,
        &quot;location&quot;: &quot;243 Jordon River\nRohanton, ME 89240&quot;,
        &quot;installation_date&quot;: &quot;2003-07-27T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Et eius eligendi aliquid sapiente. Debitis cumque quasi hic non placeat doloribus. Totam vero labore incidunt earum. Voluptatem odit repellendus ut eaque velit.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;uuid&quot;: &quot;c36e137a-9cfc-4429-97ce-1b95a3975fb5&quot;,
        &quot;name&quot;: &quot;Air Conditioner 01&quot;,
        &quot;type&quot;: &quot;AC&quot;,
        &quot;model&quot;: &quot;Samsung WindFree&quot;,
        &quot;brand&quot;: &quot;Samsung&quot;,
        &quot;serial_number&quot;: &quot;SN123456789&quot;,
        &quot;location&quot;: &quot;Office Room 101&quot;,
        &quot;installation_date&quot;: &quot;2024-01-15T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Regular maintenance every 6 months.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;uuid&quot;: &quot;d60607fd-9777-4b31-a981-e9caab0ac9a3&quot;,
        &quot;name&quot;: &quot;Elevator A&quot;,
        &quot;type&quot;: &quot;Elevator&quot;,
        &quot;model&quot;: &quot;Alpha 500&quot;,
        &quot;brand&quot;: &quot;Otis&quot;,
        &quot;serial_number&quot;: &quot;SN987654321&quot;,
        &quot;location&quot;: &quot;Main Lobby&quot;,
        &quot;installation_date&quot;: &quot;2023-11-20T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Emergency brake check completed in Feb.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;uuid&quot;: &quot;4227b338-fc23-329d-9913-74d8c8b03c2e&quot;,
        &quot;name&quot;: &quot;Device 7962&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-5907&quot;,
        &quot;brand&quot;: &quot;Schinner and Sons&quot;,
        &quot;serial_number&quot;: &quot;SN-99648958&quot;,
        &quot;location&quot;: &quot;2282 Kessler Extensions Apt. 150\nWest Tyreeville, WA 83311-3583&quot;,
        &quot;installation_date&quot;: &quot;1991-07-10T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Aut molestiae ut a laboriosam facere. Dicta quo in quia voluptas dicta. Rem sint quo nam et id. Libero mollitia inventore officiis.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;uuid&quot;: &quot;e4fd3684-e9af-3f9e-bd02-171e3dcdd4bc&quot;,
        &quot;name&quot;: &quot;Device 4820&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-6869&quot;,
        &quot;brand&quot;: &quot;Hoppe-Nienow&quot;,
        &quot;serial_number&quot;: &quot;SN-16230270&quot;,
        &quot;location&quot;: &quot;496 Barton Way\nPort Lisandromouth, OH 65103-2386&quot;,
        &quot;installation_date&quot;: &quot;1983-08-15T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Ea ipsa ducimus sint molestiae et. Accusamus inventore veritatis quia consequuntur. Mollitia neque voluptate et nesciunt qui repudiandae.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 55,
        &quot;uuid&quot;: &quot;84af0d03-a431-34ba-b888-2c4cda03c97a&quot;,
        &quot;name&quot;: &quot;Device 3068&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-5396&quot;,
        &quot;brand&quot;: &quot;Huels Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-64580846&quot;,
        &quot;location&quot;: &quot;8444 Schoen Crescent\nConsuelochester, WY 45273&quot;,
        &quot;installation_date&quot;: &quot;2005-08-11T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Ullam et aut dignissimos aut tenetur. Molestiae tempora hic sapiente dolores eaque. Corrupti non est sit rerum corrupti laboriosam.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 56,
        &quot;uuid&quot;: &quot;35a97407-dd28-3bee-9b14-ca4c0d433b8b&quot;,
        &quot;name&quot;: &quot;Device 1555&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-3927&quot;,
        &quot;brand&quot;: &quot;Smith-Kling&quot;,
        &quot;serial_number&quot;: &quot;SN-44051646&quot;,
        &quot;location&quot;: &quot;60007 Austyn Pine Suite 943\nNorth Carolanneburgh, NC 02713-8258&quot;,
        &quot;installation_date&quot;: &quot;2023-10-03T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Perspiciatis quae est quia maiores quam praesentium. Aperiam delectus deleniti esse blanditiis necessitatibus occaecati.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;uuid&quot;: &quot;f7d8360e-d38b-3252-a629-df98f9b1b819&quot;,
        &quot;name&quot;: &quot;Device 6998&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-8635&quot;,
        &quot;brand&quot;: &quot;Blanda, Buckridge and Swift&quot;,
        &quot;serial_number&quot;: &quot;SN-42617352&quot;,
        &quot;location&quot;: &quot;48824 Connie Pass Suite 816\nNew Emelie, OK 25111&quot;,
        &quot;installation_date&quot;: &quot;1987-08-12T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Officia nostrum dolorum quae minus. Autem id eos eos recusandae sint. Expedita est sint aut incidunt.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;uuid&quot;: &quot;1de61312-3011-3005-a925-f6d2550b87fc&quot;,
        &quot;name&quot;: &quot;Device 3827&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-3423&quot;,
        &quot;brand&quot;: &quot;Schulist Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-35156071&quot;,
        &quot;location&quot;: &quot;5820 Valerie Court Apt. 437\nDenesikview, NE 30429-4953&quot;,
        &quot;installation_date&quot;: &quot;1988-03-07T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Similique voluptatem est quo cumque. Consequuntur voluptatem et consectetur. Non tempora quasi at eos temporibus autem.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 59,
        &quot;uuid&quot;: &quot;c8ebec54-1baf-3af4-89a6-e75e7bdc1d87&quot;,
        &quot;name&quot;: &quot;Device 9240&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-3642&quot;,
        &quot;brand&quot;: &quot;Collins Ltd&quot;,
        &quot;serial_number&quot;: &quot;SN-10832065&quot;,
        &quot;location&quot;: &quot;978 Wunsch Divide Apt. 761\nLake Shaniya, NY 77978&quot;,
        &quot;installation_date&quot;: &quot;1976-09-13T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Autem omnis quidem facere et. Veritatis porro natus dicta est eligendi quam. Et omnis quibusdam ut suscipit.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 60,
        &quot;uuid&quot;: &quot;0891cbbe-ddcb-35b6-86d1-c1976bfed1b5&quot;,
        &quot;name&quot;: &quot;Device 0332&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-4858&quot;,
        &quot;brand&quot;: &quot;Gottlieb, Cormier and Spinka&quot;,
        &quot;serial_number&quot;: &quot;SN-16115455&quot;,
        &quot;location&quot;: &quot;33718 Brycen Motorway Suite 151\nWittingville, AZ 59803&quot;,
        &quot;installation_date&quot;: &quot;2023-06-24T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Minima magni delectus voluptatem consequuntur beatae. Vero aut corrupti vero aliquid corporis ut aut quam. Harum qui et delectus consequatur omnis nisi.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 61,
        &quot;uuid&quot;: &quot;96aa27a6-89ed-3a19-b2eb-095317fb1751&quot;,
        &quot;name&quot;: &quot;Device 7719&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-0579&quot;,
        &quot;brand&quot;: &quot;Moore Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-74585914&quot;,
        &quot;location&quot;: &quot;6557 Mitchell Ville Apt. 852\nEast Rafaelville, NE 86919-8824&quot;,
        &quot;installation_date&quot;: &quot;2017-08-10T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Illo laudantium dolor exercitationem consequuntur. Vero ut facere sunt voluptas tempore. Ad est aliquid voluptatum suscipit tempore. Voluptatum facilis distinctio sunt quos facere vero sit.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 62,
        &quot;uuid&quot;: &quot;66a29eaa-a4e2-3a21-8f77-5846e1c02d8d&quot;,
        &quot;name&quot;: &quot;Device 1428&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-4829&quot;,
        &quot;brand&quot;: &quot;Hudson Group&quot;,
        &quot;serial_number&quot;: &quot;SN-98883919&quot;,
        &quot;location&quot;: &quot;2036 Kemmer Estates Apt. 281\nLake Dominiquefort, FL 60190&quot;,
        &quot;installation_date&quot;: &quot;1989-06-03T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Ducimus aliquam qui rerum consequatur. Sunt libero iste blanditiis ut voluptas velit maiores. Quo aut est dolores ut necessitatibus possimus expedita.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 63,
        &quot;uuid&quot;: &quot;cafd9cae-a174-335f-bafd-2d2bd5c86f43&quot;,
        &quot;name&quot;: &quot;Device 5321&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-6605&quot;,
        &quot;brand&quot;: &quot;Fay LLC&quot;,
        &quot;serial_number&quot;: &quot;SN-28170514&quot;,
        &quot;location&quot;: &quot;6011 White Tunnel\nEast Melyssa, AK 54395&quot;,
        &quot;installation_date&quot;: &quot;1973-08-22T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Adipisci tempore id aut. Numquam itaque fugit reiciendis eos ut occaecati vel. Quam quibusdam et dignissimos aliquam voluptas.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 64,
        &quot;uuid&quot;: &quot;d8c4fdc2-ec6e-3c65-8749-e0f9dcf9aa8e&quot;,
        &quot;name&quot;: &quot;Device 3392&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-1034&quot;,
        &quot;brand&quot;: &quot;Zemlak-Shields&quot;,
        &quot;serial_number&quot;: &quot;SN-88209744&quot;,
        &quot;location&quot;: &quot;366 Schaden Square\nEast Isabelview, ND 61097-4989&quot;,
        &quot;installation_date&quot;: &quot;2003-01-30T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Beatae qui explicabo aspernatur qui voluptatem amet. Ut sit aut labore culpa suscipit et quidem. Molestiae est impedit accusamus et corrupti labore dolores.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 65,
        &quot;uuid&quot;: &quot;2d0364be-5587-3f81-ae7f-394fb4dd00f6&quot;,
        &quot;name&quot;: &quot;Device 0708&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-3611&quot;,
        &quot;brand&quot;: &quot;O&#039;Keefe Ltd&quot;,
        &quot;serial_number&quot;: &quot;SN-53634804&quot;,
        &quot;location&quot;: &quot;741 Anjali Ranch Suite 275\nDickensberg, IL 86780-6834&quot;,
        &quot;installation_date&quot;: &quot;1983-06-07T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Aut quo sint repudiandae adipisci. Perferendis enim corrupti repellat molestiae. Consequatur rerum voluptas dolores deleniti. Dolores aliquam dicta adipisci qui.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 66,
        &quot;uuid&quot;: &quot;1784e4bf-0cd3-3054-991d-cb39eb00390d&quot;,
        &quot;name&quot;: &quot;Device 4758&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-3318&quot;,
        &quot;brand&quot;: &quot;Erdman, Fahey and Considine&quot;,
        &quot;serial_number&quot;: &quot;SN-86681267&quot;,
        &quot;location&quot;: &quot;752 Madison Fields\nKarianneport, GA 72905-5677&quot;,
        &quot;installation_date&quot;: &quot;1993-06-30T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Unde ullam doloribus magni optio sed est. Eveniet ipsa et fugiat sunt odit laudantium repellendus ratione. Possimus reprehenderit temporibus illo nostrum quas accusamus voluptas.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 67,
        &quot;uuid&quot;: &quot;4f04f6fb-f09c-3230-8886-1a9e70abbe6f&quot;,
        &quot;name&quot;: &quot;Device 4248&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-9215&quot;,
        &quot;brand&quot;: &quot;Krajcik Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-70445871&quot;,
        &quot;location&quot;: &quot;633 Blick Lights\nNorth Celine, WI 45205&quot;,
        &quot;installation_date&quot;: &quot;1998-07-31T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Quia voluptatum totam dicta doloribus. Et consequatur occaecati eos laboriosam tenetur consectetur. Accusantium voluptate iure accusamus. Temporibus sunt quae nobis dolor amet.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 68,
        &quot;uuid&quot;: &quot;227e7fae-9182-3d19-9686-dcd9a8771c9c&quot;,
        &quot;name&quot;: &quot;Device 3771&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-5270&quot;,
        &quot;brand&quot;: &quot;Hackett, Huels and Wiegand&quot;,
        &quot;serial_number&quot;: &quot;SN-36434344&quot;,
        &quot;location&quot;: &quot;1766 Funk Plain Suite 696\nNorth Margottown, AK 82451-1064&quot;,
        &quot;installation_date&quot;: &quot;1979-09-26T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Non et ipsum rerum dolore dolor et omnis. Et minus harum ipsa exercitationem error dolorem. Quam totam eum aut atque. Quasi esse et minus molestiae dolorem.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 69,
        &quot;uuid&quot;: &quot;75790176-38ed-3022-8b2c-63fecb7787ac&quot;,
        &quot;name&quot;: &quot;Device 9353&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-9346&quot;,
        &quot;brand&quot;: &quot;Maggio Ltd&quot;,
        &quot;serial_number&quot;: &quot;SN-62169446&quot;,
        &quot;location&quot;: &quot;6456 Carlie Views Suite 635\nNinaburgh, MN 40607-7449&quot;,
        &quot;installation_date&quot;: &quot;1970-09-27T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Distinctio sint beatae dolores iure hic. Et fugiat tenetur sed ipsa. Accusamus voluptatibus optio est libero. Deleniti possimus voluptatem sed sint dolor excepturi consequatur.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 70,
        &quot;uuid&quot;: &quot;4a4641fc-e676-3422-bcb6-93261eff86e2&quot;,
        &quot;name&quot;: &quot;Device 7055&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-3078&quot;,
        &quot;brand&quot;: &quot;Carter-Pacocha&quot;,
        &quot;serial_number&quot;: &quot;SN-56397263&quot;,
        &quot;location&quot;: &quot;835 Vicente Shoal\nSouth Andreaneport, KY 28842&quot;,
        &quot;installation_date&quot;: &quot;2018-08-04T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Delectus eaque laboriosam doloribus cupiditate consequatur debitis est. Architecto omnis enim ut ea. Voluptatem omnis nihil fugiat qui et molestias beatae. Dolores dolorem totam laboriosam itaque.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 71,
        &quot;uuid&quot;: &quot;9bc45ad6-9322-332f-b02b-55a1685cea5a&quot;,
        &quot;name&quot;: &quot;Device 8070&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-5239&quot;,
        &quot;brand&quot;: &quot;Kuhic Group&quot;,
        &quot;serial_number&quot;: &quot;SN-41815674&quot;,
        &quot;location&quot;: &quot;402 May Garden\nElijahstad, CT 37139-9416&quot;,
        &quot;installation_date&quot;: &quot;1976-03-16T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Inventore et aperiam est sit veniam voluptatem. Iusto quas et totam enim sunt quidem excepturi. Porro est consequuntur facilis vel. Dolorem voluptas dolor eius dolor temporibus libero sint.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 72,
        &quot;uuid&quot;: &quot;fd8c6d17-936a-3803-8fd0-3c397c8ea19c&quot;,
        &quot;name&quot;: &quot;Device 0694&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-0556&quot;,
        &quot;brand&quot;: &quot;Welch Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-37966603&quot;,
        &quot;location&quot;: &quot;69525 Morissette Mission\nEast Annamouth, MA 31210-2866&quot;,
        &quot;installation_date&quot;: &quot;2013-01-31T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Quae dolore ab nostrum error eos alias. Assumenda sapiente voluptas laboriosam magni non quia. Ex aut ipsam non quasi.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 73,
        &quot;uuid&quot;: &quot;7599310b-692f-3840-ad68-e66ed804b870&quot;,
        &quot;name&quot;: &quot;Device 2042&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-7684&quot;,
        &quot;brand&quot;: &quot;Gottlieb Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-74611040&quot;,
        &quot;location&quot;: &quot;8451 Stiedemann Views\nJakubowskiborough, MT 83431&quot;,
        &quot;installation_date&quot;: &quot;1987-04-05T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Rerum odio eaque voluptatem vero. Enim voluptates necessitatibus suscipit animi a. Tempora necessitatibus enim ab ut qui est. Sed aut accusantium quaerat facere.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 74,
        &quot;uuid&quot;: &quot;c9f4f21a-5e21-3e38-8170-de2346100b53&quot;,
        &quot;name&quot;: &quot;Device 6099&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-4691&quot;,
        &quot;brand&quot;: &quot;Braun-D&#039;Amore&quot;,
        &quot;serial_number&quot;: &quot;SN-67384931&quot;,
        &quot;location&quot;: &quot;7002 Kutch Path Suite 462\nEast Chasity, GA 39123-8670&quot;,
        &quot;installation_date&quot;: &quot;1999-01-05T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Magnam quos quia facere. Omnis quibusdam exercitationem labore quia similique. Qui voluptatem velit rerum aspernatur officia ipsa.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 75,
        &quot;uuid&quot;: &quot;7af5e344-aaff-3dca-8163-812191e5409f&quot;,
        &quot;name&quot;: &quot;Device 9617&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-1784&quot;,
        &quot;brand&quot;: &quot;Weber, Shanahan and Sanford&quot;,
        &quot;serial_number&quot;: &quot;SN-23555241&quot;,
        &quot;location&quot;: &quot;8675 Ondricka Mountain\nMallieshire, PA 77015-4430&quot;,
        &quot;installation_date&quot;: &quot;2014-07-21T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Earum voluptas dolor asperiores quidem ut. Amet inventore qui dignissimos fugit.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 76,
        &quot;uuid&quot;: &quot;1a3e9051-de07-3899-9ff8-71ba27e94fb2&quot;,
        &quot;name&quot;: &quot;Device 0146&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-0118&quot;,
        &quot;brand&quot;: &quot;Abshire PLC&quot;,
        &quot;serial_number&quot;: &quot;SN-94007475&quot;,
        &quot;location&quot;: &quot;4077 Hintz Common\nRandyview, CO 12051-3179&quot;,
        &quot;installation_date&quot;: &quot;2018-02-04T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Autem suscipit repellat officia vero. Non qui adipisci qui eligendi eos optio. Aut quisquam dolores ut quam dignissimos maxime et.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 77,
        &quot;uuid&quot;: &quot;cfc129b5-90b2-34cb-aab6-6460726a4635&quot;,
        &quot;name&quot;: &quot;Device 4554&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-1681&quot;,
        &quot;brand&quot;: &quot;Hayes, Cormier and Bernhard&quot;,
        &quot;serial_number&quot;: &quot;SN-85700221&quot;,
        &quot;location&quot;: &quot;950 Krajcik Creek Suite 805\nMarvinmouth, MO 78411-6506&quot;,
        &quot;installation_date&quot;: &quot;2019-04-18T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Unde illum sunt est laborum. Consequatur aut est omnis. Temporibus nobis ut exercitationem a laudantium. Accusamus minus sapiente et aut dicta dolor et aliquid.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 78,
        &quot;uuid&quot;: &quot;59ee78b9-0645-349a-93ee-03b9fb11d254&quot;,
        &quot;name&quot;: &quot;Device 0576&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-1854&quot;,
        &quot;brand&quot;: &quot;Roberts LLC&quot;,
        &quot;serial_number&quot;: &quot;SN-26446416&quot;,
        &quot;location&quot;: &quot;31718 Elouise Point\nLake Valentinafort, CA 47782-8426&quot;,
        &quot;installation_date&quot;: &quot;1972-12-16T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Ut fuga nobis vitae aliquam est. Laboriosam facere aliquam dolor nesciunt quibusdam optio. Ratione voluptatem quidem dolorem et. Quo corporis eum voluptas iste est sed.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 79,
        &quot;uuid&quot;: &quot;c837160b-89af-37cb-a3b3-d20fd1faad0d&quot;,
        &quot;name&quot;: &quot;Device 2671&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-8828&quot;,
        &quot;brand&quot;: &quot;O&#039;Conner-Block&quot;,
        &quot;serial_number&quot;: &quot;SN-67467593&quot;,
        &quot;location&quot;: &quot;79434 Eichmann Inlet Suite 513\nPort Gusbury, AL 54969&quot;,
        &quot;installation_date&quot;: &quot;2001-06-23T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Aliquam suscipit doloribus magni eum nihil excepturi. Voluptatum explicabo eos blanditiis quasi. Amet quis magni qui dolor sint in.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 80,
        &quot;uuid&quot;: &quot;3f15d143-de16-325d-9590-78fcd99b2543&quot;,
        &quot;name&quot;: &quot;Device 2343&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-6712&quot;,
        &quot;brand&quot;: &quot;Kirlin, Ziemann and Weber&quot;,
        &quot;serial_number&quot;: &quot;SN-10668349&quot;,
        &quot;location&quot;: &quot;19871 Giovani Cape Apt. 967\nSouth Adriel, WA 20980-5866&quot;,
        &quot;installation_date&quot;: &quot;1997-09-30T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Iusto dolorem aliquam tenetur temporibus quia. Distinctio in repellendus cumque tempora. Natus nobis qui reprehenderit sequi. Dicta porro quas autem expedita perspiciatis illum error.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 81,
        &quot;uuid&quot;: &quot;197d3645-82cf-335f-8ecd-ae8153520e00&quot;,
        &quot;name&quot;: &quot;Device 6422&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-6999&quot;,
        &quot;brand&quot;: &quot;Runte Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-44173069&quot;,
        &quot;location&quot;: &quot;7327 Mittie Shores Apt. 554\nTiffanyfurt, NE 24325&quot;,
        &quot;installation_date&quot;: &quot;2012-04-04T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Fugit ipsam unde iusto explicabo totam voluptatem. Asperiores repudiandae iure est aut consequatur itaque consectetur. Laborum qui nihil provident omnis qui ipsum.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 82,
        &quot;uuid&quot;: &quot;30993de2-0724-3a47-aa71-0cebadf4cedc&quot;,
        &quot;name&quot;: &quot;Device 9214&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-8063&quot;,
        &quot;brand&quot;: &quot;Hagenes LLC&quot;,
        &quot;serial_number&quot;: &quot;SN-69853122&quot;,
        &quot;location&quot;: &quot;202 Theo Track Suite 881\nRansomville, OK 51746&quot;,
        &quot;installation_date&quot;: &quot;2001-11-14T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Eos nihil aut aut architecto earum. Omnis veniam voluptatem soluta excepturi totam non. Nulla rerum consectetur exercitationem voluptate velit.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 83,
        &quot;uuid&quot;: &quot;b83a3803-1a3d-32de-a682-ef1e0c7881ea&quot;,
        &quot;name&quot;: &quot;Device 8617&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-3881&quot;,
        &quot;brand&quot;: &quot;Anderson-Stanton&quot;,
        &quot;serial_number&quot;: &quot;SN-45448267&quot;,
        &quot;location&quot;: &quot;45576 Yasmine Park\nReaganshire, AZ 30920&quot;,
        &quot;installation_date&quot;: &quot;2016-04-16T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Consequatur nostrum beatae in voluptas eligendi labore cum. Voluptas est perferendis est deleniti velit dolores suscipit. In eum soluta ducimus amet reprehenderit.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 84,
        &quot;uuid&quot;: &quot;293dc516-2dda-37cc-bbd1-dba1eb3ee4f1&quot;,
        &quot;name&quot;: &quot;Device 5787&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-8622&quot;,
        &quot;brand&quot;: &quot;Bruen, Durgan and Marks&quot;,
        &quot;serial_number&quot;: &quot;SN-17626325&quot;,
        &quot;location&quot;: &quot;27956 Annabel Lodge Suite 313\nEast Ivy, WA 87856&quot;,
        &quot;installation_date&quot;: &quot;2014-04-03T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Necessitatibus possimus est quia qui eligendi officiis est. Et saepe vitae ullam quia odio minus tempore. Ipsam in beatae ea iure. Autem et nobis delectus doloremque est.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 85,
        &quot;uuid&quot;: &quot;1d731131-44a4-3cdc-a127-5672deae9005&quot;,
        &quot;name&quot;: &quot;Device 7172&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-5638&quot;,
        &quot;brand&quot;: &quot;Littel, Brown and O&#039;Keefe&quot;,
        &quot;serial_number&quot;: &quot;SN-21842360&quot;,
        &quot;location&quot;: &quot;51260 Lydia Curve\nWest Maxchester, IA 43553&quot;,
        &quot;installation_date&quot;: &quot;2014-01-21T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Perspiciatis culpa qui expedita sed aperiam dolorem. Dignissimos totam iure laudantium quia eveniet autem. Veritatis unde fugiat atque eveniet.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 86,
        &quot;uuid&quot;: &quot;8d9cadd7-da36-33d2-a4b5-c838f146d0e0&quot;,
        &quot;name&quot;: &quot;Device 9258&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-4459&quot;,
        &quot;brand&quot;: &quot;Parisian, Stanton and Farrell&quot;,
        &quot;serial_number&quot;: &quot;SN-61219560&quot;,
        &quot;location&quot;: &quot;3884 Duncan Fork\nGoodwinton, MA 26084-9704&quot;,
        &quot;installation_date&quot;: &quot;1988-11-28T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Aut sint rerum dolores nihil est. Accusamus voluptas iusto fuga et. Cumque nihil id aliquid aliquam est. Modi ea repellat veniam culpa.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 87,
        &quot;uuid&quot;: &quot;6a84c153-37a8-3d22-b944-c1621a95779a&quot;,
        &quot;name&quot;: &quot;Device 9003&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-8034&quot;,
        &quot;brand&quot;: &quot;Weber LLC&quot;,
        &quot;serial_number&quot;: &quot;SN-83111958&quot;,
        &quot;location&quot;: &quot;2693 Micaela Parkway Apt. 745\nNorth Reyna, HI 75319&quot;,
        &quot;installation_date&quot;: &quot;2002-11-22T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Placeat autem aut pariatur repellat qui eveniet. Animi ea explicabo ad excepturi. Eum ipsum placeat ducimus corporis earum et nulla delectus. Unde sint porro vitae deserunt.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 88,
        &quot;uuid&quot;: &quot;9f79c39e-f27a-3cf4-8573-d508e792376f&quot;,
        &quot;name&quot;: &quot;Device 5620&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-4526&quot;,
        &quot;brand&quot;: &quot;Jones-Mraz&quot;,
        &quot;serial_number&quot;: &quot;SN-78163679&quot;,
        &quot;location&quot;: &quot;724 Koelpin Gardens\nEast Francesco, MN 91299-5351&quot;,
        &quot;installation_date&quot;: &quot;2015-07-16T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Laboriosam possimus eaque a quidem. Omnis rerum neque rerum dolores. Sapiente nulla sit accusantium labore. Qui explicabo adipisci omnis quidem asperiores modi fugiat.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 89,
        &quot;uuid&quot;: &quot;76183156-db6d-35b2-a9c2-5b18ce7f0ade&quot;,
        &quot;name&quot;: &quot;Device 3811&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-2396&quot;,
        &quot;brand&quot;: &quot;Connelly Group&quot;,
        &quot;serial_number&quot;: &quot;SN-87014056&quot;,
        &quot;location&quot;: &quot;970 Zula Grove\nKlinghaven, AR 92543-4220&quot;,
        &quot;installation_date&quot;: &quot;2006-08-05T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Sed sed mollitia fuga aperiam. Voluptate dolorum illo consectetur. Ratione aut sunt maiores qui asperiores impedit et. Qui sit doloremque beatae provident beatae omnis voluptas.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 90,
        &quot;uuid&quot;: &quot;7cae17e6-d65e-3449-a7cd-92b6bbff9e17&quot;,
        &quot;name&quot;: &quot;Device 0763&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-5083&quot;,
        &quot;brand&quot;: &quot;Beer-Gaylord&quot;,
        &quot;serial_number&quot;: &quot;SN-91983517&quot;,
        &quot;location&quot;: &quot;127 Edwina Coves Suite 821\nNew Hailie, IA 72688-1115&quot;,
        &quot;installation_date&quot;: &quot;1980-08-06T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Molestiae eos asperiores nihil vel id. Similique est deserunt non. Fugiat sint aliquam blanditiis ut sed rerum. Aut perferendis odit velit laborum et dolorem.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 91,
        &quot;uuid&quot;: &quot;c362c069-fac8-3c84-b5f9-7d64b49ea330&quot;,
        &quot;name&quot;: &quot;Device 9210&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-7997&quot;,
        &quot;brand&quot;: &quot;Schuppe Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-75617869&quot;,
        &quot;location&quot;: &quot;1857 Favian Inlet Apt. 902\nPort Giovanna, CO 82070&quot;,
        &quot;installation_date&quot;: &quot;1990-10-21T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Vel incidunt nihil enim qui rerum corrupti aperiam. Doloremque culpa voluptatum provident est aut excepturi. Est blanditiis sit iusto distinctio.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 92,
        &quot;uuid&quot;: &quot;cc3c45fb-026f-3ab8-bff5-3dc23ca971fd&quot;,
        &quot;name&quot;: &quot;Device 2987&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-4525&quot;,
        &quot;brand&quot;: &quot;Bartoletti, Schmitt and King&quot;,
        &quot;serial_number&quot;: &quot;SN-03685777&quot;,
        &quot;location&quot;: &quot;10918 Kihn Road\nBreannefort, MN 54954&quot;,
        &quot;installation_date&quot;: &quot;2020-01-20T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Ratione dolorum omnis est dolor omnis libero nulla. Sed est alias laudantium velit pariatur. Explicabo vitae sed modi quas.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 93,
        &quot;uuid&quot;: &quot;189da091-78f2-3e21-b4be-8c35fad4e252&quot;,
        &quot;name&quot;: &quot;Device 1316&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-8613&quot;,
        &quot;brand&quot;: &quot;Grant-Boehm&quot;,
        &quot;serial_number&quot;: &quot;SN-44526784&quot;,
        &quot;location&quot;: &quot;750 Grant Light Apt. 615\nSpencershire, UT 99281&quot;,
        &quot;installation_date&quot;: &quot;2021-08-17T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Veritatis quidem rem illo eos eveniet. Facere omnis esse magni aut et voluptatem ab. Dolores beatae provident quia.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 94,
        &quot;uuid&quot;: &quot;255a29cf-d9fb-334d-86c0-4b72ff9a14a8&quot;,
        &quot;name&quot;: &quot;Device 3359&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-4080&quot;,
        &quot;brand&quot;: &quot;Larkin-Cremin&quot;,
        &quot;serial_number&quot;: &quot;SN-29756696&quot;,
        &quot;location&quot;: &quot;2362 Santa Isle Suite 953\nLake Jodie, CO 43046-9171&quot;,
        &quot;installation_date&quot;: &quot;2017-09-23T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Ab id voluptas qui culpa fugit voluptate ipsam. Nulla libero nisi doloremque quia aspernatur. Aperiam reiciendis saepe eum fugit qui numquam. Facilis odio nihil et veniam. Iste sit quas nesciunt.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 95,
        &quot;uuid&quot;: &quot;dc09e02a-5c79-30d7-b38a-8aaafa43f5d7&quot;,
        &quot;name&quot;: &quot;Device 9433&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-7301&quot;,
        &quot;brand&quot;: &quot;Jenkins-Nienow&quot;,
        &quot;serial_number&quot;: &quot;SN-66209946&quot;,
        &quot;location&quot;: &quot;14690 Karlie Course\nSavannaburgh, AK 77580&quot;,
        &quot;installation_date&quot;: &quot;1996-08-15T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Qui sint voluptates aliquid exercitationem iusto atque. Est eum labore autem eos. Consequatur error corporis assumenda inventore sed. Corporis ea nihil velit blanditiis.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 96,
        &quot;uuid&quot;: &quot;d309cd30-d5b8-3cb0-924e-36de95bbfd53&quot;,
        &quot;name&quot;: &quot;Device 4639&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-4430&quot;,
        &quot;brand&quot;: &quot;Lebsack PLC&quot;,
        &quot;serial_number&quot;: &quot;SN-67542085&quot;,
        &quot;location&quot;: &quot;611 Rodriguez Centers\nNorth Alia, OH 29139-6678&quot;,
        &quot;installation_date&quot;: &quot;1987-11-02T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Sit incidunt ad eligendi tempora asperiores autem ipsam et. Omnis quod quisquam architecto quis repellat libero quia. Est sint reiciendis neque.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 97,
        &quot;uuid&quot;: &quot;133bd8c8-34c9-39a1-83ba-81f6a7f35e26&quot;,
        &quot;name&quot;: &quot;Device 3609&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-2828&quot;,
        &quot;brand&quot;: &quot;Prohaska LLC&quot;,
        &quot;serial_number&quot;: &quot;SN-74172372&quot;,
        &quot;location&quot;: &quot;420 Patsy Ridge\nKrisville, OH 15124&quot;,
        &quot;installation_date&quot;: &quot;1994-09-22T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Vel illo ut assumenda fuga assumenda. Veniam eaque ex sit et nulla. Reiciendis dolores facere sint reprehenderit ratione minima. Eaque voluptas eum laboriosam fuga impedit voluptatem.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 98,
        &quot;uuid&quot;: &quot;54373f66-b751-36a4-8d87-1b13c65680d3&quot;,
        &quot;name&quot;: &quot;Device 4523&quot;,
        &quot;type&quot;: &quot;Wheel Lock&quot;,
        &quot;model&quot;: &quot;Model-2704&quot;,
        &quot;brand&quot;: &quot;Bode-O&#039;Reilly&quot;,
        &quot;serial_number&quot;: &quot;SN-04316729&quot;,
        &quot;location&quot;: &quot;370 Erdman Road Apt. 409\nSouth Herminioside, WA 77903-1290&quot;,
        &quot;installation_date&quot;: &quot;1977-11-21T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Qui sint et aliquam recusandae. Id error repellat similique consequatur numquam vel. Dolor eveniet maxime deserunt et mollitia id.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 99,
        &quot;uuid&quot;: &quot;8b87bdbe-6626-3bd1-9573-4df6cfd3edf1&quot;,
        &quot;name&quot;: &quot;Device 6553&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-1948&quot;,
        &quot;brand&quot;: &quot;Auer-Reichert&quot;,
        &quot;serial_number&quot;: &quot;SN-71508424&quot;,
        &quot;location&quot;: &quot;6161 Sincere Oval\nO&#039;Harahaven, KY 44763&quot;,
        &quot;installation_date&quot;: &quot;1999-09-03T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Dolores sit qui ut et. Iure vel consectetur ipsum porro. Voluptatem molestias harum error dolorum sed suscipit.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 100,
        &quot;uuid&quot;: &quot;3125d54b-67d0-30f6-b599-1bbbc3b55c00&quot;,
        &quot;name&quot;: &quot;Device 1579&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-0847&quot;,
        &quot;brand&quot;: &quot;Mosciski Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-08518257&quot;,
        &quot;location&quot;: &quot;8847 O&#039;Kon Ports\nPort Foresthaven, CO 61826&quot;,
        &quot;installation_date&quot;: &quot;1993-07-19T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Sed nobis et rerum culpa illo. Autem porro ex praesentium consectetur enim excepturi. Numquam dignissimos error aut illum beatae quis. Voluptatem laborum earum qui.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 101,
        &quot;uuid&quot;: &quot;38377c9a-398d-3e4c-b3bd-86b961f36e38&quot;,
        &quot;name&quot;: &quot;Device 5849&quot;,
        &quot;type&quot;: &quot;Gate&quot;,
        &quot;model&quot;: &quot;Model-6052&quot;,
        &quot;brand&quot;: &quot;Kozey-Gaylord&quot;,
        &quot;serial_number&quot;: &quot;SN-87315787&quot;,
        &quot;location&quot;: &quot;791 Kemmer Alley Suite 302\nBrendatown, MT 02913&quot;,
        &quot;installation_date&quot;: &quot;2016-07-13T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Velit repellendus iusto ratione suscipit. Tempora quia velit voluptates voluptas aut id quisquam. Ut quaerat id assumenda sunt voluptates.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 102,
        &quot;uuid&quot;: &quot;4cf12158-53ca-3556-af64-81e513d61791&quot;,
        &quot;name&quot;: &quot;Device 4527&quot;,
        &quot;type&quot;: &quot;A/C&quot;,
        &quot;model&quot;: &quot;Model-4752&quot;,
        &quot;brand&quot;: &quot;Schiller Inc&quot;,
        &quot;serial_number&quot;: &quot;SN-98541554&quot;,
        &quot;location&quot;: &quot;6159 Elta Square Apt. 964\nEast Jessie, NE 70795-8758&quot;,
        &quot;installation_date&quot;: &quot;2001-02-28T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Quaerat quibusdam earum corporis quos quis. Illo explicabo accusantium quis rerum aut et earum. Est sapiente aut quia non.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 103,
        &quot;uuid&quot;: &quot;923c8ba5-3fb2-4965-8f89-1735bb1e4806&quot;,
        &quot;name&quot;: &quot;Air Conditioner 01&quot;,
        &quot;type&quot;: &quot;AC&quot;,
        &quot;model&quot;: &quot;Samsung WindFree&quot;,
        &quot;brand&quot;: &quot;Samsung&quot;,
        &quot;serial_number&quot;: &quot;SN123456789&quot;,
        &quot;location&quot;: &quot;Office Room 101&quot;,
        &quot;installation_date&quot;: &quot;2024-01-15T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Regular maintenance every 6 months.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 104,
        &quot;uuid&quot;: &quot;2cceea85-5da5-442e-88b3-3b28889fa048&quot;,
        &quot;name&quot;: &quot;Elevator A&quot;,
        &quot;type&quot;: &quot;Elevator&quot;,
        &quot;model&quot;: &quot;Alpha 500&quot;,
        &quot;brand&quot;: &quot;Otis&quot;,
        &quot;serial_number&quot;: &quot;SN987654321&quot;,
        &quot;location&quot;: &quot;Main Lobby&quot;,
        &quot;installation_date&quot;: &quot;2023-11-20T00:00:00.000000Z&quot;,
        &quot;notes&quot;: &quot;Emergency brake check completed in Feb.&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T10:16:06.000000Z&quot;
    },
    {
        &quot;id&quot;: 105,
        &quot;uuid&quot;: &quot;019cdcce-7c21-70c6-aef6-5cc90be73af9&quot;,
        &quot;name&quot;: &quot;Pompa Ciepła A1&quot;,
        &quot;type&quot;: &quot;HVAC&quot;,
        &quot;model&quot;: &quot;Blumilk-X100&quot;,
        &quot;brand&quot;: &quot;Blumilk&quot;,
        &quot;serial_number&quot;: &quot;SN-2024-001&quot;,
        &quot;location&quot;: &quot;Kotłownia - Parter&quot;,
        &quot;installation_date&quot;: null,
        &quot;notes&quot;: &quot;Urządzenie zainstalowane poprawnie&quot;,
        &quot;created_at&quot;: &quot;2026-03-11T12:10:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-03-11T12:10:45.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-devices" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-devices"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-devices"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-devices" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-devices">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-devices" data-method="GET"
      data-path="api/devices"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-devices', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-devices"
                    onclick="tryItOut('GETapi-devices');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-devices"
                    onclick="cancelTryOut('GETapi-devices');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-devices"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/devices</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-devices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-devices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-devices">POST api/devices</h2>

<p>
</p>



<span id="example-requests-POSTapi-devices">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://relay-api.blumilk.local.env/api/devices" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"uuid\": \"6ff8f7f6-1eb3-3525-be4a-3932c805afed\",
    \"name\": \"g\",
    \"type\": \"z\",
    \"model\": \"m\",
    \"brand\": \"i\",
    \"serial_number\": \"y\",
    \"location\": \"v\",
    \"installation_date\": \"2026-03-11T12:19:08\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/devices"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "uuid": "6ff8f7f6-1eb3-3525-be4a-3932c805afed",
    "name": "g",
    "type": "z",
    "model": "m",
    "brand": "i",
    "serial_number": "y",
    "location": "v",
    "installation_date": "2026-03-11T12:19:08",
    "notes": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-devices">
</span>
<span id="execution-results-POSTapi-devices" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-devices"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-devices"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-devices" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-devices">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-devices" data-method="POST"
      data-path="api/devices"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-devices', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-devices"
                    onclick="tryItOut('POSTapi-devices');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-devices"
                    onclick="cancelTryOut('POSTapi-devices');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-devices"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/devices</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-devices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-devices"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>uuid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="uuid"                data-endpoint="POSTapi-devices"
               value="6ff8f7f6-1eb3-3525-be4a-3932c805afed"
               data-component="body">
    <br>
<p>Must be a valid UUID. Example: <code>6ff8f7f6-1eb3-3525-be4a-3932c805afed</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-devices"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>g</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-devices"
               value="z"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="model"                data-endpoint="POSTapi-devices"
               value="m"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>m</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>brand</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="brand"                data-endpoint="POSTapi-devices"
               value="i"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>i</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>serial_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="serial_number"                data-endpoint="POSTapi-devices"
               value="y"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>y</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="POSTapi-devices"
               value="v"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>v</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>installation_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="installation_date"                data-endpoint="POSTapi-devices"
               value="2026-03-11T12:19:08"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-11T12:19:08</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-devices"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-devices--uuid-">GET api/devices/{uuid}</h2>

<p>
</p>



<span id="example-requests-GETapi-devices--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://relay-api.blumilk.local.env/api/devices/3eb6686f-77f5-3b9e-a230-b7916437d194" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/devices/3eb6686f-77f5-3b9e-a230-b7916437d194"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-devices--uuid-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;uuid&quot;: &quot;3eb6686f-77f5-3b9e-a230-b7916437d194&quot;,
    &quot;name&quot;: &quot;Device 3799&quot;,
    &quot;type&quot;: &quot;A/C&quot;,
    &quot;model&quot;: &quot;Model-1054&quot;,
    &quot;brand&quot;: &quot;Orn, Friesen and Ortiz&quot;,
    &quot;serial_number&quot;: &quot;SN-78294004&quot;,
    &quot;location&quot;: &quot;217 Crooks Isle Suite 481\nMayerfort, NJ 50977&quot;,
    &quot;installation_date&quot;: &quot;2011-06-05T00:00:00.000000Z&quot;,
    &quot;notes&quot;: &quot;Tempora ratione voluptatem dolore distinctio quia. Non aliquam voluptas non doloribus qui. Aliquam ad possimus similique quia.&quot;,
    &quot;created_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-03-11T09:16:33.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-devices--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-devices--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-devices--uuid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-devices--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-devices--uuid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-devices--uuid-" data-method="GET"
      data-path="api/devices/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-devices--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-devices--uuid-"
                    onclick="tryItOut('GETapi-devices--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-devices--uuid-"
                    onclick="cancelTryOut('GETapi-devices--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-devices--uuid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/devices/{uuid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-devices--uuid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-devices--uuid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>uuid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="uuid"                data-endpoint="GETapi-devices--uuid-"
               value="3eb6686f-77f5-3b9e-a230-b7916437d194"
               data-component="url">
    <br>
<p>Example: <code>3eb6686f-77f5-3b9e-a230-b7916437d194</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-devices--uuid-">PUT api/devices/{uuid}</h2>

<p>
</p>



<span id="example-requests-PUTapi-devices--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://relay-api.blumilk.local.env/api/devices/3eb6686f-77f5-3b9e-a230-b7916437d194" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"type\": \"n\",
    \"model\": \"g\",
    \"brand\": \"z\",
    \"serial_number\": \"m\",
    \"location\": \"i\",
    \"installation_date\": \"2026-03-11T12:19:08\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/devices/3eb6686f-77f5-3b9e-a230-b7916437d194"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "type": "n",
    "model": "g",
    "brand": "z",
    "serial_number": "m",
    "location": "i",
    "installation_date": "2026-03-11T12:19:08",
    "notes": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-devices--uuid-">
</span>
<span id="execution-results-PUTapi-devices--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-devices--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-devices--uuid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-devices--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-devices--uuid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-devices--uuid-" data-method="PUT"
      data-path="api/devices/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-devices--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-devices--uuid-"
                    onclick="tryItOut('PUTapi-devices--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-devices--uuid-"
                    onclick="cancelTryOut('PUTapi-devices--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-devices--uuid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/devices/{uuid}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/devices/{uuid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-devices--uuid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-devices--uuid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>uuid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="uuid"                data-endpoint="PUTapi-devices--uuid-"
               value="3eb6686f-77f5-3b9e-a230-b7916437d194"
               data-component="url">
    <br>
<p>Example: <code>3eb6686f-77f5-3b9e-a230-b7916437d194</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-devices--uuid-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="PUTapi-devices--uuid-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="model"                data-endpoint="PUTapi-devices--uuid-"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>g</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>brand</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="brand"                data-endpoint="PUTapi-devices--uuid-"
               value="z"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>serial_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="serial_number"                data-endpoint="PUTapi-devices--uuid-"
               value="m"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>m</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="PUTapi-devices--uuid-"
               value="i"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>i</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>installation_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="installation_date"                data-endpoint="PUTapi-devices--uuid-"
               value="2026-03-11T12:19:08"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-11T12:19:08</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="PUTapi-devices--uuid-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-devices--uuid-">DELETE api/devices/{uuid}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-devices--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://relay-api.blumilk.local.env/api/devices/3eb6686f-77f5-3b9e-a230-b7916437d194" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/devices/3eb6686f-77f5-3b9e-a230-b7916437d194"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-devices--uuid-">
</span>
<span id="execution-results-DELETEapi-devices--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-devices--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-devices--uuid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-devices--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-devices--uuid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-devices--uuid-" data-method="DELETE"
      data-path="api/devices/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-devices--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-devices--uuid-"
                    onclick="tryItOut('DELETEapi-devices--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-devices--uuid-"
                    onclick="cancelTryOut('DELETEapi-devices--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-devices--uuid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/devices/{uuid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-devices--uuid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-devices--uuid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>uuid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="uuid"                data-endpoint="DELETEapi-devices--uuid-"
               value="3eb6686f-77f5-3b9e-a230-b7916437d194"
               data-component="url">
    <br>
<p>Example: <code>3eb6686f-77f5-3b9e-a230-b7916437d194</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-devices-with-qr">POST api/devices/with-qr</h2>

<p>
</p>



<span id="example-requests-POSTapi-devices-with-qr">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://relay-api.blumilk.local.env/api/devices/with-qr" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"uuid\": \"6ff8f7f6-1eb3-3525-be4a-3932c805afed\",
    \"name\": \"g\",
    \"type\": \"z\",
    \"model\": \"m\",
    \"brand\": \"i\",
    \"serial_number\": \"y\",
    \"location\": \"v\",
    \"installation_date\": \"2026-03-11T12:19:08\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/devices/with-qr"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "uuid": "6ff8f7f6-1eb3-3525-be4a-3932c805afed",
    "name": "g",
    "type": "z",
    "model": "m",
    "brand": "i",
    "serial_number": "y",
    "location": "v",
    "installation_date": "2026-03-11T12:19:08",
    "notes": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-devices-with-qr">
</span>
<span id="execution-results-POSTapi-devices-with-qr" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-devices-with-qr"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-devices-with-qr"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-devices-with-qr" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-devices-with-qr">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-devices-with-qr" data-method="POST"
      data-path="api/devices/with-qr"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-devices-with-qr', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-devices-with-qr"
                    onclick="tryItOut('POSTapi-devices-with-qr');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-devices-with-qr"
                    onclick="cancelTryOut('POSTapi-devices-with-qr');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-devices-with-qr"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/devices/with-qr</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-devices-with-qr"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-devices-with-qr"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>uuid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="uuid"                data-endpoint="POSTapi-devices-with-qr"
               value="6ff8f7f6-1eb3-3525-be4a-3932c805afed"
               data-component="body">
    <br>
<p>Must be a valid UUID. Example: <code>6ff8f7f6-1eb3-3525-be4a-3932c805afed</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-devices-with-qr"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>g</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-devices-with-qr"
               value="z"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="model"                data-endpoint="POSTapi-devices-with-qr"
               value="m"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>m</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>brand</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="brand"                data-endpoint="POSTapi-devices-with-qr"
               value="i"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>i</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>serial_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="serial_number"                data-endpoint="POSTapi-devices-with-qr"
               value="y"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>y</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>location</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="location"                data-endpoint="POSTapi-devices-with-qr"
               value="v"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>v</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>installation_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="installation_date"                data-endpoint="POSTapi-devices-with-qr"
               value="2026-03-11T12:19:08"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-11T12:19:08</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-devices-with-qr"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-devices--device_uuid--qr">GET api/devices/{device_uuid}/qr</h2>

<p>
</p>



<span id="example-requests-GETapi-devices--device_uuid--qr">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://relay-api.blumilk.local.env/api/devices/3eb6686f-77f5-3b9e-a230-b7916437d194/qr" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/devices/3eb6686f-77f5-3b9e-a230-b7916437d194/qr"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-devices--device_uuid--qr">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: image/svg+xml
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; version=&quot;1.1&quot; width=&quot;200&quot; height=&quot;200&quot; viewBox=&quot;0 0 200 200&quot;&gt;&lt;rect x=&quot;0&quot; y=&quot;0&quot; width=&quot;200&quot; height=&quot;200&quot; fill=&quot;#ffffff&quot;/&gt;&lt;g transform=&quot;scale(6.897)&quot;&gt;&lt;g transform=&quot;translate(0,0)&quot;&gt;&lt;path fill-rule=&quot;evenodd&quot; d=&quot;M10 0L10 2L11 2L11 0ZM12 0L12 1L13 1L13 2L12 2L12 4L13 4L13 3L14 3L14 4L17 4L17 5L15 5L15 6L14 6L14 8L16 8L16 9L18 9L18 10L15 10L15 9L12 9L12 7L13 7L13 5L11 5L11 6L10 6L10 4L11 4L11 3L8 3L8 4L9 4L9 5L8 5L8 7L9 7L9 8L6 8L6 9L5 9L5 8L0 8L0 9L2 9L2 10L1 10L1 12L2 12L2 15L3 15L3 16L2 16L2 17L3 17L3 18L2 18L2 21L5 21L5 20L6 20L6 21L8 21L8 23L9 23L9 21L10 21L10 20L9 20L9 18L10 18L10 16L11 16L11 17L12 17L12 18L13 18L13 19L12 19L12 21L13 21L13 20L14 20L14 21L19 21L19 20L17 20L17 18L18 18L18 19L19 19L19 18L20 18L20 22L18 22L18 23L19 23L19 24L15 24L15 23L17 23L17 22L15 22L15 23L14 23L14 24L15 24L15 25L12 25L12 23L13 23L13 22L10 22L10 24L8 24L8 29L9 29L9 26L10 26L10 24L11 24L11 25L12 25L12 26L13 26L13 27L12 27L12 29L13 29L13 28L14 28L14 29L19 29L19 28L21 28L21 29L24 29L24 28L25 28L25 26L26 26L26 27L27 27L27 28L26 28L26 29L27 29L27 28L28 28L28 26L29 26L29 25L27 25L27 24L28 24L28 22L29 22L29 21L28 21L28 20L29 20L29 19L28 19L28 20L25 20L25 19L24 19L24 18L25 18L25 17L26 17L26 18L29 18L29 17L27 17L27 16L25 16L25 15L24 15L24 14L26 14L26 15L27 15L27 14L29 14L29 13L28 13L28 12L29 12L29 11L28 11L28 10L29 10L29 9L28 9L28 8L27 8L27 9L28 9L28 10L26 10L26 8L25 8L25 9L24 9L24 8L23 8L23 9L22 9L22 8L20 8L20 7L21 7L21 6L20 6L20 7L19 7L19 6L18 6L18 7L19 7L19 8L20 8L20 9L18 9L18 8L16 8L16 7L17 7L17 5L20 5L20 4L21 4L21 3L20 3L20 2L21 2L21 1L20 1L20 0L19 0L19 1L18 1L18 3L17 3L17 2L16 2L16 0L15 0L15 1L14 1L14 0ZM8 1L8 2L9 2L9 1ZM19 1L19 2L20 2L20 1ZM14 2L14 3L15 3L15 2ZM19 3L19 4L20 4L20 3ZM9 6L9 7L10 7L10 6ZM11 6L11 7L12 7L12 6ZM15 6L15 7L16 7L16 6ZM10 8L10 9L9 9L9 10L8 10L8 9L6 9L6 10L7 10L7 11L5 11L5 10L4 10L4 9L3 9L3 11L2 11L2 12L3 12L3 11L4 11L4 12L7 12L7 13L5 13L5 14L3 14L3 15L5 15L5 14L7 14L7 15L6 15L6 16L5 16L5 17L4 17L4 19L3 19L3 20L4 20L4 19L6 19L6 20L7 20L7 19L6 19L6 18L7 18L7 17L6 17L6 16L7 16L7 15L8 15L8 16L9 16L9 15L8 15L8 14L7 14L7 13L9 13L9 12L11 12L11 13L10 13L10 14L13 14L13 15L12 15L12 17L15 17L15 18L16 18L16 17L17 17L17 16L20 16L20 18L22 18L22 19L21 19L21 20L22 20L22 19L23 19L23 18L24 18L24 17L25 17L25 16L24 16L24 17L23 17L23 15L22 15L22 14L21 14L21 16L20 16L20 14L19 14L19 13L21 13L21 12L22 12L22 13L25 13L25 12L27 12L27 11L26 11L26 10L24 10L24 9L23 9L23 10L22 10L22 9L20 9L20 10L19 10L19 13L14 13L14 12L15 12L15 11L14 11L14 12L13 12L13 13L12 13L12 11L13 11L13 10L12 10L12 9L11 9L11 8ZM10 9L10 11L11 11L11 9ZM20 10L20 11L21 11L21 10ZM7 11L7 12L8 12L8 11ZM16 11L16 12L18 12L18 11ZM23 11L23 12L25 12L25 11ZM0 13L0 14L1 14L1 13ZM26 13L26 14L27 14L27 13ZM15 14L15 15L14 15L14 16L15 16L15 17L16 17L16 16L17 16L17 15L18 15L18 14L17 14L17 15L16 15L16 14ZM0 16L0 21L1 21L1 16ZM21 16L21 17L22 17L22 18L23 18L23 17L22 17L22 16ZM5 17L5 18L6 18L6 17ZM18 17L18 18L19 18L19 17ZM14 19L14 20L16 20L16 19ZM8 20L8 21L9 21L9 20ZM21 21L21 24L24 24L24 21ZM26 21L26 22L25 22L25 23L26 23L26 24L25 24L25 25L24 25L24 26L23 26L23 25L20 25L20 24L19 24L19 25L15 25L15 26L16 26L16 27L17 27L17 28L18 28L18 27L20 27L20 26L23 26L23 27L22 27L22 28L23 28L23 27L24 27L24 26L25 26L25 25L26 25L26 26L27 26L27 25L26 25L26 24L27 24L27 23L26 23L26 22L28 22L28 21ZM22 22L22 23L23 23L23 22ZM19 25L19 26L20 26L20 25ZM17 26L17 27L18 27L18 26ZM14 27L14 28L15 28L15 27ZM10 28L10 29L11 29L11 28ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z&quot; fill=&quot;#000000&quot;/&gt;&lt;/g&gt;&lt;/g&gt;&lt;/svg&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-devices--device_uuid--qr" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-devices--device_uuid--qr"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-devices--device_uuid--qr"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-devices--device_uuid--qr" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-devices--device_uuid--qr">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-devices--device_uuid--qr" data-method="GET"
      data-path="api/devices/{device_uuid}/qr"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-devices--device_uuid--qr', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-devices--device_uuid--qr"
                    onclick="tryItOut('GETapi-devices--device_uuid--qr');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-devices--device_uuid--qr"
                    onclick="cancelTryOut('GETapi-devices--device_uuid--qr');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-devices--device_uuid--qr"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/devices/{device_uuid}/qr</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-devices--device_uuid--qr"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-devices--device_uuid--qr"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>device_uuid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="device_uuid"                data-endpoint="GETapi-devices--device_uuid--qr"
               value="3eb6686f-77f5-3b9e-a230-b7916437d194"
               data-component="url">
    <br>
<p>Example: <code>3eb6686f-77f5-3b9e-a230-b7916437d194</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
