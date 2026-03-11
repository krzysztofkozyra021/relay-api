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
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-devices--id-">
                                <a href="#endpoints-GETapi-devices--id-">GET api/devices/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-devices--id-">
                                <a href="#endpoints-PUTapi-devices--id-">PUT api/devices/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-devices--id-">
                                <a href="#endpoints-DELETEapi-devices--id-">DELETE api/devices/{id}</a>
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
    \"installation_date\": \"2026-03-11T09:52:05\",
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
    "installation_date": "2026-03-11T09:52:05",
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
 &nbsp;
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
               value="2026-03-11T09:52:05"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-11T09:52:05</code></p>
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

                    <h2 id="endpoints-GETapi-devices--id-">GET api/devices/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-devices--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://relay-api.blumilk.local.env/api/devices/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/devices/1"
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

<span id="example-responses-GETapi-devices--id-">
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
<span id="execution-results-GETapi-devices--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-devices--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-devices--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-devices--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-devices--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-devices--id-" data-method="GET"
      data-path="api/devices/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-devices--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-devices--id-"
                    onclick="tryItOut('GETapi-devices--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-devices--id-"
                    onclick="cancelTryOut('GETapi-devices--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-devices--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/devices/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-devices--id-"
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
                              name="Accept"                data-endpoint="GETapi-devices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-devices--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the device. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-devices--id-">PUT api/devices/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-devices--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "https://relay-api.blumilk.local.env/api/devices/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"type\": \"n\",
    \"model\": \"g\",
    \"brand\": \"z\",
    \"serial_number\": \"m\",
    \"location\": \"i\",
    \"installation_date\": \"2026-03-11T09:52:05\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/devices/1"
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
    "installation_date": "2026-03-11T09:52:05",
    "notes": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-devices--id-">
</span>
<span id="execution-results-PUTapi-devices--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-devices--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-devices--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-devices--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-devices--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-devices--id-" data-method="PUT"
      data-path="api/devices/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-devices--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-devices--id-"
                    onclick="tryItOut('PUTapi-devices--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-devices--id-"
                    onclick="cancelTryOut('PUTapi-devices--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-devices--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/devices/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/devices/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-devices--id-"
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
                              name="Accept"                data-endpoint="PUTapi-devices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-devices--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the device. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-devices--id-"
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
                              name="type"                data-endpoint="PUTapi-devices--id-"
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
                              name="model"                data-endpoint="PUTapi-devices--id-"
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
                              name="brand"                data-endpoint="PUTapi-devices--id-"
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
                              name="serial_number"                data-endpoint="PUTapi-devices--id-"
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
                              name="location"                data-endpoint="PUTapi-devices--id-"
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
                              name="installation_date"                data-endpoint="PUTapi-devices--id-"
               value="2026-03-11T09:52:05"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-03-11T09:52:05</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="PUTapi-devices--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-devices--id-">DELETE api/devices/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-devices--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://relay-api.blumilk.local.env/api/devices/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://relay-api.blumilk.local.env/api/devices/1"
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

<span id="example-responses-DELETEapi-devices--id-">
</span>
<span id="execution-results-DELETEapi-devices--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-devices--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-devices--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-devices--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-devices--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-devices--id-" data-method="DELETE"
      data-path="api/devices/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-devices--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-devices--id-"
                    onclick="tryItOut('DELETEapi-devices--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-devices--id-"
                    onclick="cancelTryOut('DELETEapi-devices--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-devices--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/devices/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-devices--id-"
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
                              name="Accept"                data-endpoint="DELETEapi-devices--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-devices--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the device. Example: <code>1</code></p>
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
