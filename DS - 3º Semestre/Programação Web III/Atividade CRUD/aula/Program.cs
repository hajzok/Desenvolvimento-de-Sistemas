using Microsoft.AspNetCore.Mvc;
using MySql.Data.MySqlClient;
using Newtonsoft.Json;
using System.Data;
using System.Text.Json;
using System.Text.Json.Nodes;

var builder = WebApplication.CreateBuilder(args);

builder.Services.AddEndpointsApiExplorer();

var app = builder.Build();

app.MapGet("/listar", () =>
{
    MySqlConnection conexao = new MySqlConnection();
    conexao.ConnectionString = "server=localhost;password=aluno.etec;User Id=aluno;database=teste;";
    conexao.Open();

    MySqlCommand sql = new MySqlCommand("SELECT * FROM aluno",conexao);

    DataTable dados = new DataTable();
    dados.Load(sql.ExecuteReader());

    conexao.Close();

    return Results.Ok(JsonDocument.Parse(JsonConvert.SerializeObject(dados)));
})
.WithName("ListarAluno");

app.MapPost("/incluir", ([FromBody] JsonObject dados) =>
{
    if(string.IsNullOrEmpty((string)dados["nome"]) || string.IsNullOrEmpty((string)dados["email"]) || string.IsNullOrEmpty((string)dados["rg"]))
    {
        return Results.BadRequest(new { erro = "Campos em branco" });
    }

    MySqlConnection conexao = new MySqlConnection();
    conexao.ConnectionString = "server=localhost;password=aluno.etec;User Id=aluno;database=teste;";
    conexao.Open();

    MySqlCommand sql = new MySqlCommand("INSERT INTO aluno(nome,email,rg) " +
        "VALUES(@c,@v,@p)", conexao);
    sql.Parameters.AddWithValue("@c", dados["nome"]);
    sql.Parameters.AddWithValue("@v", dados["email"]);
    sql.Parameters.AddWithValue("@p", dados["rg"]);

    var retorno = sql.ExecuteNonQuery();

    conexao.Close();

    if(retorno == 1)
    {
        return Results.Ok();
    }
    else
    {
        return Results.Problem();
    }
    
})
.WithName("IncluirAluno");


app.MapPost("/alterar/{id}", ([FromBody] JsonObject dados, string id) =>
{
    if (string.IsNullOrEmpty((string)dados["nome"]) || string.IsNullOrEmpty((string)dados["email"]) || string.IsNullOrEmpty((string)dados["rg"]))
    {
        return Results.BadRequest(new { erro = "Campos em branco" });
    }

    MySqlConnection conexao = new MySqlConnection();
    conexao.ConnectionString = "server=localhost;password=aluno.etec;User Id=aluno;database=teste;";
    conexao.Open();

    MySqlCommand sql = new MySqlCommand("UPDATE aluno SET nome = @c, email = @v, rg = @p " +
        "WHERE id = @id", conexao);
    sql.Parameters.AddWithValue("@c", dados["nome"]);
    sql.Parameters.AddWithValue("@v", dados["email"]);
    sql.Parameters.AddWithValue("@p", dados["rg"]);
    sql.Parameters.AddWithValue("@id", id);

    var retorno = sql.ExecuteNonQuery();

    conexao.Close();

    if (retorno == 1)
    {
        return Results.Ok();
    }
    else
    {
        return Results.Problem();
    }

})
.WithName("AlterarAluno");


app.MapDelete("/excluir/{id}", ([FromBody] JsonObject dados, string id) =>
{
    MySqlConnection conexao = new MySqlConnection();
    conexao.ConnectionString = "server=localhost;password=aluno.etec;User Id=aluno;database=teste;";
    conexao.Open();

    MySqlCommand sql = new MySqlCommand("DELETE FROM aluno WHERE id = @id", conexao);
    sql.Parameters.AddWithValue("@id", id);

    var retorno = sql.ExecuteNonQuery();

    conexao.Close();

    if (retorno == 1)
    {
        return Results.Ok();
    }
    else
    {
        return Results.Problem();
    }

})
.WithName("ExcluirAluno");

app.Run();
